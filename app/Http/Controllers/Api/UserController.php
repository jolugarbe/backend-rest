<?php

namespace App\Http\Controllers\Api;

use App\Repositories\ActivityRepo;
use App\Repositories\AddressRepo;
use App\Repositories\LocalityRepo;
use App\Repositories\ProvinceRepo;
use App\Repositories\UserRepo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Validator;

class UserController extends Controller
{

    protected $userRepo;
    protected $addressRepo;
    protected $activityRepo;
    protected $localityRepo;
    protected $provinceRepo;

    function __construct(UserRepo $userRepo, AddressRepo $addressRepo, ActivityRepo $activityRepo, LocalityRepo $localityRepo, ProvinceRepo $provinceRepo)
    {
        $this->userRepo = $userRepo;
        $this->addressRepo = $addressRepo;
        $this->activityRepo = $activityRepo;
        $this->localityRepo = $localityRepo;
        $this->provinceRepo = $provinceRepo;
    }

    /**
     * Return data of the authenticated user.
     * @return \Illuminate\Http\JsonResponse
     */
    public function profileHome()
    {
        $user = Auth::user();
        $total_waste = $user->getWasteCreated()->where('owner_user_id', null)->count();
        $total_transfers = $user->getTransfers->count();
        $total_requests = $user->getRequests->count();
        return response()->json(['user' => $user, 'total_waste' => $total_waste, 'total_transfers' => $total_transfers, 'total_requests' => $total_requests], 200);
    }

    public function show(Request $request)
    {
        try{
            $user_log = Auth::user();
            $input = $request->all();
            $user = $this->userRepo->findOrFail($input['user_id']);
            $activity = $user->getActivity->getName();

//            $address = $this->addressRepo->findOrFail($user->address_id);
            $address = $user->getAddress;
            $locality = $address->getLocality->getName();
            $province = $address->getLocality->getProvince->getName();

            $notification = $user->getNotificationData;
//            $not_address = $this->addressRepo->findOrFail($notification->address_id);
            $not_address = $notification->getAddress;
            $not_locality = $not_address->getLocality->getName();
            $not_province = $not_address->getLocality->getProvince->getName();

            return response()->json(['user' => $user, 'activity' => $activity, 'address' => $address, 'locality' => $locality, 'province' => $province, 'not_address' => $not_address, 'not_locality' => $not_locality, 'not_province' => $not_province, 'notification' => $notification], 200);

        }catch (\Exception $exception){
            return response()->json(['exception' => $exception->getMessage()], 500);
        }
    }

    public function profileData()
    {
        try{
            $user = Auth::user();
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

    public function update(Request $request)
    {
        $user = Auth::user();

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
}
