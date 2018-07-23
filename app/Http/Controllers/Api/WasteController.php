<?php

namespace App\Http\Controllers\Api;

use App\Jobs\EnviarMail;
use App\Locality;
use App\Province;
use App\Repositories\AddressRepo;
use App\Repositories\AdTypeRepo;
use App\Repositories\CerCodeRepo;
use App\Repositories\CerGroupRepo;
use App\Repositories\CerSubgroupRepo;
use App\Repositories\FrequencyRepo;
use App\Repositories\LocalityRepo;
use App\Repositories\ProvinceRepo;
use App\Repositories\TransferRepo;
use App\Repositories\WasteRepo;
use App\Repositories\WasteTypeRepo;
use App\Waste;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Validator;

class WasteController extends Controller
{
    protected $adRepo;
    protected $frequencyRepo;
    protected $wasteTypeRepo;
    protected $localityRepo;
    protected $provinceRepo;
    protected $wasteRepo;
    protected $addressRepo;
    protected $transferRepo;
    protected $cerGroupRepo;
    protected $cerSubgroupRepo;
    protected $cerCodeRepo;

    function __construct(AdTypeRepo $adTypeRepo, FrequencyRepo $frequencyRepo, WasteTypeRepo $wasteTypeRepo, LocalityRepo $localityRepo, ProvinceRepo $provinceRepo, WasteRepo $wasteRepo, AddressRepo $addressRepo, TransferRepo $transferRepo, CerGroupRepo $cerGroupRepo, CerSubgroupRepo $cerSubgroupRepo, CerCodeRepo $cerCodeRepo)
    {
        $this->adRepo = $adTypeRepo;
        $this->frequencyRepo = $frequencyRepo;
        $this->wasteTypeRepo = $wasteTypeRepo;
        $this->localityRepo = $localityRepo;
        $this->provinceRepo = $provinceRepo;
        $this->wasteRepo = $wasteRepo;
        $this->addressRepo = $addressRepo;
        $this->transferRepo = $transferRepo;
        $this->cerGroupRepo = $cerGroupRepo;
        $this->cerSubgroupRepo = $cerSubgroupRepo;
        $this->cerCodeRepo = $cerCodeRepo;
    }

    public function allCreateData(){

        try{
            $adType = $this->adRepo->allOrderByName('asc');
            $frequencies = $this->frequencyRepo->allOrderByName('asc');
            $types = $this->wasteTypeRepo->allOrderByName('asc');
            $localities = $this->localityRepo->allOrderByName('asc');
            $provinces = $this->provinceRepo->allOrderByName('asc');
            $cerGroups = $this->cerGroupRepo->all();
            $cerSubgroups = $this->cerSubgroupRepo->all();
            $cerCodes = $this->cerCodeRepo->all();
            return response()->json(['ads' => $adType, 'frequencies' => $frequencies, 'types' => $types, 'localities' => $localities, 'provinces' => $provinces, 'cer_groups' => $cerGroups, 'cer_subgroups' => $cerSubgroups, 'cer_codes' => $cerCodes], 200);
        }catch (\Exception $exception){
            return response()->json(['exception' => $exception->getMessage()], 500);
        }

    }

    public function updateData(Request $request)
    {
        try{
            $user = Auth::user();
            $input = $request->all();
            $waste = $this->wasteRepo->findOrFail($input['waste_id']);
            $adType = $this->adRepo->allOrderByName('asc');
            $frequencies = $this->frequencyRepo->allOrderByName('asc');
            $types = $this->wasteTypeRepo->allOrderByName('asc');
            $localities = $this->localityRepo->allOrderByName('asc');
            $provinces = $this->provinceRepo->allOrderByName('asc');
            $address = $this->addressRepo->findOrFail($waste['address_id']);
            $locality = $this->localityRepo->findOrFail($address['locality_id']);
            $cer_subgroups = $this->cerSubgroupRepo->all();
            $cer_codes = $this->cerCodeRepo->all();

            if(($waste['creator_user_id'] == $user->getId() && $waste['owner_user_id'] == null) || $user->hasRole('admin'))
            {
                return response()->json(['ads' => $adType, 'frequencies' => $frequencies, 'types' => $types, 'localities' => $localities, 'provinces' => $provinces, 'waste' => $waste, 'address' => $address, 'locality' => $locality, 'cer_subgroups' => $cer_subgroups, 'cer_codes' => $cer_codes], 200);
            }else {
                return response()->json(['exception' => 'No tienes permiso para editar este residuo.'], 403);
            }

        }catch (\Exception $exception){
            return response()->json(['exception' => $exception->getMessage()], 500);
        }
    }

    public function register(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'waste_type' => 'required',
            'quantity' => 'required',
            'measured_unit' => 'required',
            'frequency' => 'required',
            'composition' => 'required',
            'dangerous' => 'required',
            'handling' => 'required',
            'generation_date' => 'required',
            'pickup_date' => 'required',
            'address_line' => 'required',
            'postal_code' => 'required',
            'province' => 'required',
            'locality' => 'required',
            'packaging' => 'required',
            'transport' => 'required',
            'cer_code' => 'required',
            'ad_type' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }

        $input = $request->all();

        $name = $input['name'];
        $waste_type = $input['waste_type'];
        $quantity = $input['quantity'];
        $measured_unit = $input['measured_unit'];
        $frequency = $input['frequency'];
        $composition = $input['composition'];
        $dangerous = $input['dangerous'];
        $handling = $input['handling'];
        $generation_date = $input['generation_date'];
        $pickup_date = $input['pickup_date'];
        $packaging = $input['packaging'];
        $transport = $input['transport'];
        $cer_code = $input['cer_code'];
        $ad_type = $input['ad_type'];
        $address_line = $input['address_line'];
        $postal_code = $input['postal_code'];
        $province = $input['province'];
        $locality = $input['locality'];
        $creator_id = Auth::user()->getId();
        $description = array_key_exists('description', $input) ? $input['description'] : null;
        $presentation = array_key_exists('presentation', $input) ? $input['presentation'] : null;
        $production = array_key_exists('production', $input) ? $input['production'] : null;

        DB::beginTransaction();
        try{
            $waste = $this->wasteRepo->register($name, $waste_type, $quantity, $measured_unit, $frequency, $composition, $dangerous, $handling, $generation_date, $pickup_date, $packaging, $transport, $cer_code, $ad_type, $address_line, $postal_code, $province, $locality, $description, $presentation, $production, $creator_id);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Residuo registrado correctamente.'
            ], 200);

        }catch (\Exception $exception){
            DB::rollBack();
            Log::error($exception);
            return response()->json(['exception' => $exception], 500);
        }

    }

    public function update(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'waste_type' => 'required',
            'quantity' => 'required',
            'measured_unit' => 'required',
            'frequency' => 'required',
            'composition' => 'required',
            'dangerous' => 'required',
            'handling' => 'required',
            'generation_date' => 'required',
            'pickup_date' => 'required',
            'address_line' => 'required',
            'postal_code' => 'required',
            'province' => 'required',
            'locality' => 'required',
            'packaging' => 'required',
            'transport' => 'required',
            'cer_code' => 'required',
            'ad_type' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 422);
        }

        $input = $request->all();

        $name = $input['name'];
        $waste_type = $input['waste_type'];
        $quantity = $input['quantity'];
        $measured_unit = $input['measured_unit'];
        $frequency = $input['frequency'];
        $composition = $input['composition'];
        $dangerous = $input['dangerous'];
        $handling = $input['handling'];
        $generation_date = $input['generation_date'];
        $pickup_date = $input['pickup_date'];
        $packaging = $input['packaging'];
        $transport = $input['transport'];
        $cer_code = $input['cer_code'];
        $ad_type = $input['ad_type'];
        $address_line = $input['address_line'];
        $postal_code = $input['postal_code'];
        $province = $input['province'];
        $locality = $input['locality'];
        $creator_id = Auth::user()->getId();
        $waste_id = $input['waste_id'];
        $address_id = $input['address_id'];
        $description = array_key_exists('description', $input) ? $input['description'] : null;
        $presentation = array_key_exists('presentation', $input) ? $input['presentation'] : null;
        $production = array_key_exists('production', $input) ? $input['production'] : null;

        DB::beginTransaction();
        try{
            $waste = $this->wasteRepo->updateWaste($name, $waste_type, $quantity, $measured_unit, $frequency, $composition, $dangerous, $handling, $generation_date, $pickup_date, $packaging, $transport, $cer_code, $ad_type, $address_line, $postal_code, $province, $locality, $description, $presentation, $production, $creator_id, $waste_id, $address_id);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Residuo actualizado correctamente.'
            ], 200);

        }catch (\Exception $exception){
            DB::rollBack();
            Log::error($exception);
            return response()->json(['exception' => $exception], 500);
        }

    }

    public function dataById(Request $request){
        $input = $request->all();
        try{
            $waste = $this->wasteRepo->findOrFail($input['waste_id']);
            return response()->json([
                'waste' => $waste
            ], 200);
        }catch (\Exception $exception){
            return response()->json(['exception' => $exception], 500);
        }

    }

    public function userOffersData(Request $request){
        $user = Auth::user();
        $f_name = $request->input('f_name');
        $f_waste_type = $request->input('f_waste_type');
        $f_cer_code = $request->input('f_cer_code');
        $f_generation_date = $request->input('f_generation_date');
        $f_dangerous = $request->input('f_dangerous');
        $f_ad_type = $request->input('f_ad_type');
        $waste = $this->wasteRepo->userOffersData($user, $f_name, $f_waste_type, $f_cer_code, $f_generation_date, $f_dangerous, $f_ad_type);

        return json_encode($waste);
    }

    public function availableListData(Request $request){
        $user = Auth::user();
        $f_name = $request->input('f_name');
        $f_waste_type = $request->input('f_waste_type');
        $f_cer_code = $request->input('f_cer_code');
        $f_pickup_date = $request->input('f_pickup_date');
        $f_creator_name = $request->input('f_creator_name');
        $f_generation_date = $request->input('f_generation_date');
        $f_dangerous = $request->input('f_dangerous');
        $waste = $this->wasteRepo->availableData($user, $f_name, $f_waste_type, $f_cer_code, $f_pickup_date, $f_creator_name, $f_generation_date, $f_dangerous);

        return json_encode($waste);
    }

    public function demandListData(Request $request){
        $user = Auth::user();
        $f_name = $request->input('f_name');
        $f_waste_type = $request->input('f_waste_type');
        $f_cer_code = $request->input('f_cer_code');
//        $f_pickup_date = $request->input('f_pickup_date');
        $f_creator_name = $request->input('f_creator_name');
//        $f_generation_date = $request->input('f_generation_date');
        $f_dangerous = $request->input('f_dangerous');
        $f_publication_date_1 = $request->input('f_publication_date_1');
        $f_publication_date_2 = $request->input('f_publication_date_2');
        $waste = $this->wasteRepo->demandData($user, $f_name, $f_waste_type, $f_cer_code, null, $f_creator_name, null, $f_dangerous, $f_publication_date_1, $f_publication_date_2);

        return json_encode($waste);
    }

    public function userTransfersData(Request $request){
        $user = Auth::user();
        $f_name = $request->input('f_name');
        $f_waste_type = $request->input('f_waste_type');
        $f_cer_code = $request->input('f_cer_code');
        $f_pickup_date = $request->input('f_pickup_date');
        $f_request_name = $request->input('f_request_name');
        $f_request_date = $request->input('f_request_date');
        $waste = $this->wasteRepo->userTransfersData($user, $f_name, $f_waste_type, $f_cer_code, $f_pickup_date, $f_request_name, $f_request_date);

        return json_encode($waste);

    }

    public function userRequestsData(Request $request){
        $user = Auth::user();
        $f_name = $request->input('f_name');
        $f_waste_type = $request->input('f_waste_type');
        $f_cer_code = $request->input('f_cer_code');
        $f_pickup_date = $request->input('f_pickup_date');
        $f_creator_name = $request->input('f_creator_name');
        $f_request_date = $request->input('f_request_date');
        $waste = $this->wasteRepo->userRequestsData($user, $f_name, $f_waste_type, $f_cer_code, $f_pickup_date, $f_creator_name, $f_request_date);

        return json_encode($waste);

    }

    public function requestWaste(Request $request){
        $input = $request->all();
        DB::beginTransaction();
        try{
            $user = Auth::user();
            $waste = $this->wasteRepo->findOrFail($input['waste_id']);
            $owner = $waste->getCreator;
            $transfer = $this->transferRepo->transferWaste($owner->getId(), $user->getId(), $waste->getId());
            $waste->setOwnerId($user->getId());
            $waste->setAvailable(0);
            $waste->save();

            DB::commit();

            return response()->json([
                'message' => "Solicitud tramitada correctamente.",
                'waste' => json_encode($waste),
                'owner_email' => $owner->getNotificationData->getEmail(),
                'user_email' => $user->getNotificationData->getEmail(),
            ], 200);

        }catch (\Exception $exception){
            Log::error('SOLICITUD DE RESIDUO: '. $exception->getMessage());
            DB::rollBack();
            return response()->json(['exception' => $exception, 'message' => "Se ha producido un error al tramitar la solicitud."], 500);
        }
    }

    public function show(Request $request)
    {
        try{
            $user = Auth::user();
            $input = $request->all();
            $waste = $this->wasteRepo->findOrFail($input['waste_id']);
            $adType = $waste->getAdType->getName();
            $frequency = $waste->getFrequency->getName();
            $type = $waste->getWasteType->getName();
//            $localities = $this->localityRepo->allOrderByName('asc');
//            $provinces = $this->provinceRepo->allOrderByName('asc');
            $address = $this->addressRepo->findOrFail($waste['address_id']);
            $locality = $address->getLocality->getName();
            $province = $address->getLocality->getProvince->getName();
            $cer_code = $waste->getCerCode;

            return response()->json(['ads' => $adType, 'frequency' => $frequency, 'type' => $type,  'waste' => $waste, 'address' => $address, 'locality' => $locality, 'province' => $province, 'cer_code' => $cer_code], 200);
//            if($waste['owner_user_id'] == $user->getId())
//            {
//                return response()->json(['ads' => $adType, 'frequency' => $frequency, 'type' => $type,  'waste' => $waste, 'address' => $address, 'locality' => $locality, 'province' => $province], 200);
//            }else {
//                return response()->json(['exception' => 'No tienes permiso para ver este residuo.'], 403);
//            }

        }catch (\Exception $exception){
            return response()->json(['exception' => $exception->getMessage()], 500);
        }
    }

    public function delete(Request $request){
        $input = $request->all();
        DB::beginTransaction();
        try{
            $user = Auth::user();
            $waste = $this->wasteRepo->findOrFail($input['waste_id']);

            if($waste->getCreator->getId() == $user->getId() || $user->hasRole('admin'))
            {
                $waste->delete();
            }else{
                return response()->json(['exception' => "unauthorized", 'message' => "No tiene permiso para eliminar este residuo."], 500);
            }

            DB::commit();
            return response()->json([
                'message' => "Residuo eliminado correctamente."
            ], 200);
        }catch (\Exception $exception){
            DB::rollBack();
            return response()->json(['exception' => $exception, 'message' => "Se ha producido un error al eliminar el residuo."], 500);
        }
    }

    public function showTransferRequest(Request $request) {
        try{
            $user = Auth::user();
            $input = $request->all();
            $transfer = $this->transferRepo->findOrFail($input['transfer_id']);
            $waste = $transfer->getWaste;
            $cer_code = $waste->getCerCode;
            $adType = $waste->getAdType->getName();
            $frequency = $waste->getFrequency->getName();
            $type = $waste->getWasteType->getName();
//            $localities = $this->localityRepo->allOrderByName('asc');
//            $provinces = $this->provinceRepo->allOrderByName('asc');
            $address = $this->addressRepo->findOrFail($waste['address_id']);
            $locality = $address->getLocality->getName();
            $province = $address->getLocality->getProvince->getName();

            $owner_user = $transfer->getOwnerWaste;
            $owner_activity = $owner_user->getActivity->getName();
            $owner_address = $owner_user->getAddress;
            $owner_locality = $owner_address->getLocality->getName();
            $owner_province = $owner_address->getLocality->getProvince->getName();

            $request_user = $transfer->getApplicantUser;
            $request_activity = $request_user->getActivity->getName();
            $request_address = $request_user->getAddress;
            $request_locality = $request_address->getLocality->getName();
            $request_province = $request_address->getLocality->getProvince->getName();

            $status_transfer_id = $transfer->getStatus->getId();
            $status_transfer_name = $transfer->getStatus->getDisplayName();

            if($transfer['owner_user_id'] == $user->getId() || $transfer['applicant_user_id'] == $user->getId() || $user->hasRole('admin'))
            {
                return response()->json(['ads' => $adType, 'frequency' => $frequency, 'type' => $type,  'waste' => $waste, 'address' => $address, 'locality' => $locality, 'province' => $province, 'owner_user' => $owner_user, 'owner_activity' => $owner_activity, 'owner_address' => $owner_address, 'owner_locality' => $owner_locality, 'owner_province' => $owner_province, 'request_user' => $request_user, 'request_activity' => $request_activity, 'request_address' => $request_address, 'request_locality' => $request_locality, 'request_province' => $request_province, 'status_transfer_id' => $status_transfer_id, 'status_transfer_name' => $status_transfer_name, 'cer_code' => $cer_code], 200);
            }else {
                return response()->json(['exception' => 'No tienes permiso para ver esta operación.'], 403);
            }

        }catch (\Exception $exception){
            return response()->json(['exception' => $exception->getMessage()], 500);
        }
    }

    public function proposeDemandWaste(Request $request){
        $input = $request->all();

        try{
            $user = Auth::user();
            $waste = $this->wasteRepo->findOrFail($input['waste_id']);
            $creator = $waste->getCreator;
            $proposal = $input['proposal'];

            return response()->json([
                'waste' => $waste,
                'user' => $user,
                'creator' => $creator,
                'proposal' => $proposal,
                'notification_creator' => $creator->getNotificationData,
                'notification_user' => $user->getNotificationData
            ], 200);

        }catch (\Exception $exception){
            Log::error('PROPUESTA SOBRE RESIDUO: '. $exception->getMessage());
            return response()->json(['exception' => $exception, 'message' => "Se ha producido un error al enviar la propuesta."], 500);
        }
    }

    public function acquiredDemandWaste(Request $request){
        $input = $request->all();
        DB::beginTransaction();
        try{
            $user = Auth::user();
            $waste = $this->wasteRepo->findOrFail($input['waste_id']);
            $waste->setDemandAcquired(1);
            $waste->save();

            DB::commit();
            return response()->json([
                'message' => "Residuo marcado como conseguido correctamente."
            ], 200);
        }catch (\Exception $exception){
            DB::rollBack();
            return response()->json(['exception' => $exception, 'message' => "Se ha producido un error al marcar el residuo como conseguido."], 500);
        }
    }
}
