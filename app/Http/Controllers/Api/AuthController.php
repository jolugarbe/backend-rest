<?php

namespace App\Http\Controllers\Api;

use App\Jobs\EnviarMail;
use App\Repositories\UserRepo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Validator;

class AuthController extends Controller
{

    protected $userRepo;

    function __construct(UserRepo $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    /**
     * Register an User with data received from Form.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {

        $customMessages = [
            'email.unique' => 'El :attribute ya está registrado.',
            'cif.unique' => 'El :attribute ya está registrado.'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'activity' => 'required',
            'business_name' => 'required',
            'cif' => 'required|unique:users',
            'address_line' => 'required',
            'postal_code' => 'required',
            'province' => 'required',
            'locality' => 'required',
            'contact_person' => 'required',
            'telephone' => 'required',
            'carbon_footprint' => 'required',
            'carbon_inscription' => 'required_if:carbon_footprint,1',
            'email' => 'required|unique:users|email',
//            'password' => 'required',
//            'confirm_password' => 'required|same:password',
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }

        $input = $request->all();

        $name = $input['name'];
        $activity = $input['activity'];
        $business_name = $input['business_name'];
        $cif = $input['cif'];
        $address_line = $input['address_line'];
        $postal_code = $input['postal_code'];
        $province = $input['province'];
        $locality = $input['locality'];
        $contact_person = $input['contact_person'];
        $telephone = $input['telephone'];
        $email = $input['email'];
        $carbon_footprint = $input['carbon_footprint'];
        $password = str_random(9);
        $carbon_inscription = array_key_exists('carbon_inscription', $input) ? $input['carbon_inscription'] : null;
        $notification_data = array_key_exists('notification_data', $input) ? true : null;
        $not_address_line = array_key_exists('not_address_line', $input) ? $input['not_address_line'] : null;
        $not_postal_code = array_key_exists('not_postal_code', $input) ? $input['not_postal_code'] : null;
        $not_province = array_key_exists('not_province', $input) ? $input['not_province'] : null;
        $not_locality = array_key_exists('not_locality', $input) ? $input['not_locality'] : null;
        $not_contact_person = array_key_exists('not_contact_person', $input) ? $input['not_contact_person'] : null;
        $not_telephone = array_key_exists('not_telephone', $input) ? $input['not_telephone'] : null;
        $not_email = array_key_exists('not_email', $input) ? $input['not_email'] : null;

        // PASSWORD SE TENDRÁ QUE GENERAR ALEATORIO Y ENVIAR AL USUARIO POR MAIL
        //        $input['password'] = bcrypt($request->get('password'));

        DB::beginTransaction();
        try{
            $user = $this->userRepo->registerUser($name, $activity, $business_name, $cif, $address_line, $postal_code, $province, $locality, $contact_person, $telephone, $email, $not_address_line, $not_contact_person, $not_email, $not_locality, $not_postal_code, $not_province, $not_telephone, $carbon_footprint, $carbon_inscription, $notification_data, $password);

            $token =  $user->createToken('MyApp')->accessToken;

            DB::commit();

            $contenido = \View::make('emails.user-welcome',  compact('password', 'email'))->render();
            $datos=[
                $email,
                $email,
                'contacto@bolsaderesiduos.com',
                'Contacto',
                'CAFA | Datos de Acceso a la Bolsa de Residuos Reutilizables y Reciclables',
                $contenido,
                null,
                null];

            $mail=new EnviarMail($datos);
            $this->dispatch($mail);

            return response()->json([
                'token' => $token,
                'user' => $user
            ], 200);

        }catch (\Exception $exception){
            DB::rollBack();
            Log::error($exception);
            return response()->json(['exception' => $exception], 500);
        }

    }


    /**
     * Login an User with data received from From.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $token =  $user->createToken('MyApp')->accessToken;
            return response()->json([
                'token' => $token,
                'user' => $user,
            ], 200);
        } else {
            return response()->json(['error' => 'Las credenciales introducidas no están autorizadas o son incorrectas.'], 401);
        }
    }

    public function logout(Request $request){
        $user = Auth::user();
        Auth::user()->token()->revoke();
        return response()->json([$user], 200);
    }

    public function emailReset(Request $request){
        try{
            $input = $request->all();
            $email = $input['email'];
            $user = $this->userRepo->getModel()->where('email', '=', $email)->first();

            if($user){

                // Delete all previous request to reset password and create the new token for this request.
                DB::table('password_resets')->where('email', '=', $email)->delete();

                $token = uniqid('pass');
                DB::table('password_resets')->insert(
                    ['email' => $email, 'token' => $token, 'created_at' => Carbon::now()]
                );

                $contenido = \View::make('emails.reset-password',  compact('token'))->render();
                $datos=[
                    $email,
                    $email,
                    'from@example.com',
                    'Example',
                    'Restaurar contraseña',
                    $contenido,
                    null,
                    null];

                $mail=new EnviarMail($datos);
                $this->dispatch($mail);

                return response()->json(['success' => 'Accede a tu email para poder restaurar la contraseña de acceso.'], 200);
            }else{
                return response()->json(['error' => 'El email introducido no está registrado.'], 404);
            }
        }catch (\Exception $exception){
            Log::error('ERROR ENVIAR EMAIL: '. $exception->getMessage());
            return response()->json(['error' => 'Se ha producido un error al procesar la restauración de la contraseña de acceso.'], 500);
        }
    }


    public function checkTokenResetPass(Request $request){

        try{
            $input = $request->all();
            $token = $input['token_reset_pass'];
            $user = $this->userRepo->getModel()
                ->join('password_resets', 'password_resets.email', '=', 'users.email')
                ->where('password_resets.token', '=', $token)
                ->select('users.*', 'password_resets.created_at as request_date')->first();

            if($user){

                if(Carbon::now()->diffInDays(Carbon::createFromFormat('Y-m-d H:i:s', $user->request_date)) > 1){
                    return response()->json(['error' => 'Por motivos de seguridad este enlace ha caducado. Vuelva a solicitar la restauración de su contraseña de acceso.'], 403);
                }else{
                    return response()->json(['success' => 'Introduce tu email y la nueva contraseña para finalizar el proceso de restauración.', 'email' => $user->email], 200);
                }
            }else{
                return response()->json(['error' => 'Solicitud de restauración de contraseña inválida.'], 404);
            }
        }catch (\Exception $exception){
            Log::error('ERROR CHECK TOKEN RESET PASS: '. $exception->getMessage());
            return response()->json(['error' => 'Se ha producido un error al procesar la restauración de la contraseña de acceso.'], 500);
        }

    }


    public function resetUpdatePassword(Request $request){
        try{

            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
            ]);

            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 422);
            }

            $input = $request->all();
            $email = $input['email'];
            $password = $input['password'];
            $user = $this->userRepo->getModel()->where('email', '=', $email)->first();
            $reset = DB::table('password_resets')->where('email', '=', $email)->first();

            if($reset){
                if($user){

                    $user->setPassword($password);
                    $user->save();

                    DB::table('password_resets')->where('email', '=', $email)->delete();

                    return response()->json(['success' => true, 'message' => 'Contraseña actualizada correctamente.'], 200);

                }else{
                    return response()->json(['success' => false, 'message' => 'El email introducido no está registrado'], 404);
                }
            }else {
                return response()->json(['success' => false, 'message' => 'El email introducido no tiene ninguna solicitud de recuperar contraseña activa.'], 404);
            }

        }catch (\Exception $exception){
            return response()->json(['success' => false, 'message'  => 'Se ha producido un error al actualizar la contraseña de acceso.'], 500);
        }
    }
}
