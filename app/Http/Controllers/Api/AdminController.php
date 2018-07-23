<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ActivityRepo;
use App\Repositories\AddressRepo;
use App\Repositories\LocalityRepo;
use App\Repositories\ProvinceRepo;
use App\Repositories\TransferRepo;
use App\Repositories\UserRepo;
use App\Repositories\WasteRepo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Validator;

class AdminController extends Controller
{
    protected $userRepo;
    protected $addressRepo;
    protected $activityRepo;
    protected $localityRepo;
    protected $provinceRepo;
    protected $transferRepo;
    protected $wasteRepo;

    function __construct(UserRepo $userRepo, AddressRepo $addressRepo, ActivityRepo $activityRepo, LocalityRepo $localityRepo, ProvinceRepo $provinceRepo, TransferRepo $transferRepo, WasteRepo $wasteRepo)
    {
        $this->userRepo = $userRepo;
        $this->addressRepo = $addressRepo;
        $this->activityRepo = $activityRepo;
        $this->localityRepo = $localityRepo;
        $this->provinceRepo = $provinceRepo;
        $this->transferRepo = $transferRepo;
        $this->wasteRepo = $wasteRepo;
    }

    public function dashboardData()
    {
        try{
            Log::info('ENTRA EN DASHBOARD DATA');
            $user = Auth::user();
            $total_users = $this->userRepo->all()->count();
            $total_transfers = $this->transferRepo->all()->count();
            $total_demand = $this->wasteRepo->getModel()->where('t_ad_id', '=', 2)->count();
            $total_offers = $this->wasteRepo->getModel()->where('t_ad_id', '=', 1)->where('available', '=', 1)->count();
            $users_by_month = array();

            for($i = 1; $i <= 12; $i++)
            {
                $users = $this->userRepo->getUsersByMonthYear($i, Carbon::now()->year);
                array_push($users_by_month, $users);
            }

            $transfers_months = array();

            for($i = 1; $i <= 12; $i++)
            {
                $transfers = $this->transferRepo->getTransfersByMonthYear($i, Carbon::now()->year);
                array_push($transfers_months, $transfers);
            }

            $waste_available_months = array();

            for($i = 1; $i <= 12; $i++)
            {
                $waste = $this->wasteRepo->getWasteByMonthYear($i, Carbon::now()->year, 1);
                array_push($waste_available_months, $waste);
            }

            $waste_request_months = array();

            for($i = 1; $i <= 12; $i++)
            {
                $waste = $this->wasteRepo->getWasteByMonthYear($i, Carbon::now()->year, 2);
                array_push($waste_request_months, $waste);
            }


            return response()->json(['user' => $user, 'total_users' => $total_users, 'total_transfers' => $total_transfers, 'total_demand' => $total_demand, 'total_offers' => $total_offers, 'users_months' => $users_by_month, 'transfers_months' => $transfers_months, 'waste_available_months' => $waste_available_months, 'waste_request_months' => $waste_request_months], 200);
        }catch (\Exception $exception){
            return response()->json(['exception' => $exception->getMessage()], 500);
        }
    }

    public function usersListData(Request $request)
    {
        try{
            $user = Auth::user();
            $f_business_name = $request->input('f_business_name');
            $f_activity = $request->input('f_activity');
            $f_cif = $request->input('f_cif');
            $f_register_from = $request->input('f_register_from');
            $f_register_until = $request->input('f_register_until');
            $f_carbon_footprint = $request->input('f_carbon_footprint');
            $f_carbon_from = $request->input('f_carbon_from');
            $f_carbon_until = $request->input('f_carbon_until');
            $users = $this->userRepo->usersListData($user, $f_business_name, $f_activity, $f_cif, $f_register_from, $f_register_until, $f_carbon_footprint, $f_carbon_from, $f_carbon_until);

            return json_encode($users);
        }catch (\Exception $exception){
            return response()->json(['exception' => $exception->getMessage()], 500);
        }

    }

    public function allUserCreateData()
    {
        try{
            $activities = $this->activityRepo->all();
            $provinces = $this->provinceRepo->allOrderByName('asc');
            $localities = $this->localityRepo->allOrderByName('asc');

            return response()->json(['activities' => $activities, 'provinces' => $provinces, 'localities' => $localities], 200);

        }catch (\Exception $exception){
            return response()->json(['exception' => $exception->getMessage()], 500);
        }

    }

    public function userData(Request $request)
    {Log::info(json_encode($request->all()));
        try{
            $user = $this->userRepo->findOrFail($request->input('user_id'));
            $address = $user->getAddress;
            $province_id = $address->getLocality->getProvince->getId();
            $notification = $user->getNotificationData;
            $not_address = $notification->getAddress;
            $not_province_id = $not_address->getLocality->getProvince->getId();
            $activities = $this->activityRepo->all();
            $provinces = $this->provinceRepo->allOrderByName('asc');
            $localities = $this->localityRepo->allOrderByName('asc');

            return response()->json(['user' => $user, 'address' => $address, 'province_id' => $province_id, 'not_address' => $not_address, 'not_province_id' => $not_province_id, 'notification' => $notification, 'activities' => $activities, 'provinces' => $provinces, 'localities' => $localities], 200);

        }catch (\Exception $exception){
            Log::error('PROFILE DATA ERROR: ' . $exception->getMessage());
            return response()->json(['exception' => $exception->getMessage()], 500);
        }
    }

    public function updateUser(Request $request)
    {
        $user = $this->userRepo->findOrFail($request->input('user_id'));

        $customMessages = [
            'email.unique' => 'El :attribute ya está registrado.',
            'cif.unique' => 'El :attribute ya está registrado.'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'activity' => 'required',
            'business_name' => 'required',
            'cif' => [
                'required',
                Rule::unique('users')->ignore($user->getId()),
            ],
            'address_line' => 'required',
            'postal_code' => 'required',
            'province' => 'required',
            'locality' => 'required',
            'contact_person' => 'required',
            'telephone' => 'required',
            'carbon_footprint' => 'required',
            'carbon_inscription' => 'required_if:carbon_footprint,1',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->getId()),
                'email'
            ],
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
        $carbon_inscription = array_key_exists('carbon_inscription', $input) ? $input['carbon_inscription'] : null;
        $notification_data = array_key_exists('notification_data', $input) ? true : null;
        $not_address_line = array_key_exists('not_address_line', $input) ? $input['not_address_line'] : null;
        $not_postal_code = array_key_exists('not_postal_code', $input) ? $input['not_postal_code'] : null;
        $not_province = array_key_exists('not_province', $input) ? $input['not_province'] : null;
        $not_locality = array_key_exists('not_locality', $input) ? $input['not_locality'] : null;
        $not_contact_person = array_key_exists('not_contact_person', $input) ? $input['not_contact_person'] : null;
        $not_telephone = array_key_exists('not_telephone', $input) ? $input['not_telephone'] : null;
        $not_email = array_key_exists('not_email', $input) ? $input['not_email'] : null;

        DB::beginTransaction();
        try{
            $user = $this->userRepo->updateUser($user, $name, $activity, $business_name, $cif, $address_line, $postal_code, $province, $locality, $contact_person, $telephone, $email, $not_address_line, $not_contact_person, $not_email, $not_locality, $not_postal_code, $not_province, $not_telephone, $carbon_footprint, $carbon_inscription, $notification_data);

            DB::commit();

            return response()->json([
                'update' => 'success',
                'message' => 'Datos actualizados correctamente.'
            ], 200);

        }catch (\Exception $exception){
            DB::rollBack();
            Log::error($exception);
            return response()->json(['exception' => $exception], 500);
        }

    }

    public function deleteUser(Request $request)
    {
        $input = $request->all();
        DB::beginTransaction();
        try{

            $user = $this->userRepo->findOrFail($input['user_id']);
            $user->delete();

            DB::commit();
            return response()->json([
                'message' => "Usuario eliminado correctamente."
            ], 200);
        }catch (\Exception $exception){
            DB::rollBack();
            return response()->json(['exception' => $exception, 'message' => "Se ha producido un error al eliminar el usuario."], 500);
        }
    }

    public function allTransfersData(Request $request){
        $user = Auth::user();
        $f_name = $request->input('f_name');
        $f_waste_type = $request->input('f_waste_type');
        $f_cer_code = $request->input('f_cer_code');
        $f_create_date_start = $request->input('f_create_date_start');
        $f_create_date_end = $request->input('f_create_date_end');
        $f_request_name = $request->input('f_request_name');
        $f_creator_name = $request->input('f_creator_name');
        $waste = $this->wasteRepo->allTransfersData($user, $f_name, $f_waste_type, $f_cer_code, $f_create_date_start, $f_create_date_end, $f_request_name, $f_creator_name);

        return json_encode($waste);

    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $customMessages = [
            'email.unique' => 'El :attribute ya está registrado.',
            'cif.unique' => 'El :attribute ya está registrado.'
        ];

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address_line' => 'required',
            'postal_code' => 'required',
            'province' => 'required',
            'locality' => 'required',
            'telephone' => 'required',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->getId()),
                'email'
            ],
//            'password' => 'required',
//            'confirm_password' => 'required|same:password',
        ], $customMessages);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }

        $input = $request->all();

        $name = $input['name'];
        $address_line = $input['address_line'];
        $postal_code = $input['postal_code'];
        $province = $input['province'];
        $locality = $input['locality'];
        $telephone = $input['telephone'];
        $email = $input['email'];

        DB::beginTransaction();
        try{
            $user = $this->userRepo->updateAdminUser($user, $name, $address_line, $postal_code, $province, $locality, $telephone, $email);

            DB::commit();

            return response()->json([
                'update' => 'success',
                'message' => 'Datos actualizados correctamente.'
            ], 200);

        }catch (\Exception $exception){
            DB::rollBack();
            Log::error($exception);
            return response()->json(['exception' => $exception], 500);
        }

    }
}
