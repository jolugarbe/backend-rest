<?php

namespace App\Http\Controllers\Api;

use App\Jobs\EnviarMail;
use App\Repositories\UserRepo;
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
        $password = "123456";
        $carbon_inscription = array_key_exists('carbon_inscription', $input) ? $input['carbon_inscription'] : null;
        $notification_data = array_key_exists('notification_data', $input) ? true : null;
        $not_address_line = array_key_exists('not_address_line', $input) ? $input['not_address_line'] : null;
        $not_postal_code = array_key_exists('not_postal_code', $input) ? $input['not_postal_code'] : null;
        $not_province = array_key_exists('not_province', $input) ? $input['not_province'] : null;
        $not_locality = array_key_exists('not_locality', $input) ? $input['not_locality'] : null;
        $not_contact_person = array_key_exists('not_contact_person', $input) ? $input['not_contact_person'] : null;
        $not_telephone = array_key_exists('not_telephone', $input) ? $input['not_telephone'] : null;
        $not_email = array_key_exists('not_email', $input) ? $input['not_email'] : null;

        //        $input['password'] = bcrypt($request->get('password'));

        DB::beginTransaction();
        try{
            $user = $this->userRepo->registerUser($name, $activity, $business_name, $cif, $address_line, $postal_code, $province, $locality, $contact_person, $telephone, $email, $not_address_line, $not_contact_person, $not_email, $not_locality, $not_postal_code, $not_province, $not_telephone, $carbon_footprint, $carbon_inscription, $notification_data, $password);
//        $user = User::create($input);
//        $user->assignRole('user');
            $token =  $user->createToken('MyApp')->accessToken;

            DB::commit();

            return response()->json([
                'token' => $token,
                'user' => $user
            ], 200);

        }catch (\Exception $exception){
            DB::rollBack();
            Log::error($exception);
            return response()->json(['exception' => $exception], 500);
        }


//        $contenido=\View::make('mails.confirmation', compact('email', 'token'))->render();
//
//        $datos=[$data['email'],
//            $data['email'],
//            'info@thedoger.com',
//            'Doger',
//            'Confirmación de registro',
//            $contenido,
//            null,
//            null];
//
//        $mail=new EnviarMail($datos);
//        $this->dispatch($mail);


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
                'user' => $user
            ], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }
}
