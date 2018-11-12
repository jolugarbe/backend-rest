<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\Address;
use App\Waste;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class WasteRepo extends BaseRepo
{
    protected $addressRepo;

    function __construct(AddressRepo $addressRepo)
    {
        $this->addressRepo = $addressRepo;
    }

    public function getModel()
    {
        return new Waste();
    }

    public function register($name, $waste_type, $quantity, $measured_unit, $frequency, $composition, $dangerous, $handling, $generation_date, $pickup_date, $packaging, $transport, $cer_code, $ad_type, $address_line, $postal_code, $province, $locality, $description, $presentation, $production, $creator_id)
{
    $address = new Address();
    $address->setAddressLine($address_line);
    $address->setPostalCode($postal_code);
    $address->setLocalityId($locality);
    $address->save();

    $waste = $this->getModel();
    $waste->setName($name);
    $waste->setWasteTypeId($waste_type);
    $waste->setQuantity($quantity);
    $waste->setMeasuredUnit($measured_unit);
    $waste->setFrequencyId($frequency);
    $waste->setComposition($composition);
    $waste->setDangerous($dangerous);
    $waste->setHandling($handling);
    $waste->setGenerationDate(Carbon::createFromFormat('d/m/Y', $generation_date)->format('Y-m-d'));
    $waste->setPickupDate(Carbon::createFromFormat('d/m/Y', $pickup_date)->format('Y-m-d'));
    $waste->setPackaging($packaging);
    $waste->setTransport($transport);
    $waste->setCerCodeId($cer_code);
    $waste->setAdTypeId($ad_type);
    $waste->setAddressId($address->getId());
    $waste->setDescription($description);
    $waste->setPresentation($presentation);
    $waste->setProduction($production);
    $waste->setCreatorId($creator_id);

    $waste = $this->updateWithoutData($waste);

    return $waste;
}

    public function updateWaste($name, $waste_type, $quantity, $measured_unit, $frequency, $composition, $dangerous, $handling, $generation_date, $pickup_date, $packaging, $transport, $cer_code, $ad_type, $address_line, $postal_code, $province, $locality, $description, $presentation, $production, $creator_id, $waste_id, $address_id, $created_at = null)
    {
        $address = $this->addressRepo->findOrFail($address_id);
        $address->setAddressLine($address_line);
        $address->setPostalCode($postal_code);
        $address->setLocalityId($locality);
        $address = $this->addressRepo->updateWithoutData($address);

        $waste = $this->findOrFail($waste_id);
        $waste->setName($name);
        $waste->setWasteTypeId($waste_type);
        $waste->setQuantity($quantity);
        $waste->setMeasuredUnit($measured_unit);
        $waste->setFrequencyId($frequency);
        $waste->setComposition($composition);
        $waste->setDangerous($dangerous);
        $waste->setHandling($handling);
        $waste->setGenerationDate(Carbon::createFromFormat('d/m/Y', $generation_date)->format('Y-m-d'));
        $waste->setPickupDate(Carbon::createFromFormat('d/m/Y', $pickup_date)->format('Y-m-d'));
        $waste->setPackaging($packaging);
        $waste->setTransport($transport);
        $waste->setCerCodeId($cer_code);
        $waste->setAdTypeId($ad_type);
        $waste->setAddressId($address->getId());
        $waste->setDescription($description);
        $waste->setPresentation($presentation);
        $waste->setProduction($production);
        if($created_at)
            $waste->created_at = Carbon::createFromFormat('d/m/Y', $created_at);

        $waste = $this->updateWithoutData($waste);

        return $waste;
    }

    public function userOffersData($user, $f_name = null, $f_waste_type = null, $f_cer_code = null, $f_generation_date = null, $f_dangerous = null, $f_ad_type = null)
    {
        $query = $this->getModel()
            ->join('waste_type', 'waste_type.id', '=', 'waste.t_waste_id')
            ->join('cer_codes', 'cer_codes.id', '=', 'waste.cer_code_id')
            ->where('waste.creator_user_id', '=', $user->getId())
            ->whereNull('waste.owner_user_id');

        // Filters
        if($f_name)
            $query = $query->where('waste.name', 'like', '%'.$f_name.'%');

        if($f_waste_type)
            $query = $query->where('waste.t_waste_id', '=', $f_waste_type);

        if($f_cer_code)
            $query = $query->where('waste.cer_code_id', '=', $f_cer_code);

        if($f_generation_date)
            $query = $query->where('waste.generation_date', '=', Carbon::createFromFormat('d/m/Y', $f_generation_date)->format('Y-m-d'));

        if($f_dangerous != 'all')
            $query = $query->where('waste.dangerous', '=', $f_dangerous);

        if($f_ad_type)
            $query = $query->where('waste.t_ad_id', '=', $f_ad_type);
        // End Filters

        $query = $query->select('waste.id', 'waste.quantity', 'waste.composition','waste.measured_unit', 'waste.name', 'waste.t_ad_id', DB::raw("CONCAT(cer_codes.code,' - ',cer_codes.name) as cer_code"), 'waste.generation_date', 'waste.dangerous', 'waste_type.name as type', 'waste.acquired');
        return $query->get();
    }

    public function availableData($user, $f_name = null, $f_waste_type = null, $f_cer_code = null, $f_pickup_date = null, $f_creator_name = null, $f_generation_date = null, $f_dangerous = null)
    {
        $query = $this->getModel()
            ->join('waste_type', 'waste_type.id', '=', 'waste.t_waste_id')
            ->join('cer_codes', 'cer_codes.id', '=', 'waste.cer_code_id')
            ->join('users', 'users.id', '=', 'waste.creator_user_id')
            ->where('creator_user_id', '!=', $user->getId())
            ->whereNull('owner_user_id')
            ->where('t_ad_id', '=', 1);

        // Filters
        if($f_name)
            $query = $query->where('waste.name', 'like', '%'.$f_name.'%');

        if($f_waste_type)
            $query = $query->where('waste.t_waste_id', '=', $f_waste_type);

        if($f_cer_code)
            $query = $query->where('waste.cer_code_id', '=', $f_cer_code);

        if($f_pickup_date)
            $query = $query->where('waste.pickup_date', '=', Carbon::createFromFormat('d/m/Y', $f_pickup_date)->format('Y-m-d'));

        if($f_creator_name)
            $query = $query->where('users.business_name', 'like', '%'.$f_creator_name.'%');

        if($f_generation_date)
            $query = $query->where('waste.generation_date', '=', Carbon::createFromFormat('d/m/Y', $f_generation_date)->format('Y-m-d'));

        if($f_dangerous != 'all')
            $query = $query->where('waste.dangerous', '=', $f_dangerous);
        // End Filters

        $query = $query->select('waste.id', 'waste.quantity','waste.measured_unit', 'waste.name', DB::raw("CONCAT(cer_codes.code,' - ',cer_codes.name) as cer_code"), 'waste.pickup_date', 'users.business_name as creator_name', 'waste.generation_date as generation_date', 'waste_type.name as type', 'waste.dangerous', 'waste.creator_user_id');

        return $query->get();
    }

    public function demandData($user, $f_name = null, $f_waste_type = null, $f_cer_code = null, $f_pickup_date = null, $f_creator_name = null, $f_generation_date = null, $f_dangerous = null, $f_publication_date_1 = null, $f_publication_date_2 = null)
    {
        $query = $this->getModel()
            ->join('waste_type', 'waste_type.id', '=', 'waste.t_waste_id')
            ->join('cer_codes', 'cer_codes.id', '=', 'waste.cer_code_id')
            ->join('users', 'users.id', '=', 'waste.creator_user_id')
            ->where('creator_user_id', '!=', $user->getId())
            ->whereNull('owner_user_id')
            ->where('t_ad_id', '=', 2);

        // Filters
        if($f_name)
            $query = $query->where('waste.name', 'like', '%'.$f_name.'%');

        if($f_waste_type)
            $query = $query->where('waste.t_waste_id', '=', $f_waste_type);

        if($f_cer_code)
            $query = $query->where('waste.cer_code_id', '=', $f_cer_code);

        if($f_pickup_date)
            $query = $query->where('waste.pickup_date', '=', Carbon::createFromFormat('d/m/Y', $f_pickup_date)->format('Y-m-d'));

        if($f_creator_name)
            $query = $query->where('users.business_name', 'like', '%'.$f_creator_name.'%');

        if($f_generation_date)
            $query = $query->where('waste.generation_date', '=', Carbon::createFromFormat('d/m/Y', $f_generation_date)->format('Y-m-d'));

        if($f_dangerous != 'all')
            $query = $query->where('waste.dangerous', '=', $f_dangerous);

        if($f_publication_date_1)
            $query = $query->where('waste.created_at', '>=', Carbon::createFromFormat('d/m/Y', $f_publication_date_1)->subDay()->format('Y-m-d H:i:s'));

        if($f_publication_date_2)
            $query = $query->where('waste.created_at', '<=', Carbon::createFromFormat('d/m/Y', $f_publication_date_2)->format('Y-m-d H:i:s'));
        // End Filters

        $query = $query->select('waste.id', 'waste.quantity','waste.measured_unit', 'waste.name', DB::raw("CONCAT(cer_codes.code,' - ',cer_codes.name) as cer_code"), 'waste.pickup_date', 'users.business_name as creator_name', 'waste.generation_date as generation_date', 'waste_type.name as type', 'waste.dangerous', 'waste.created_at as publication_date', 'waste.creator_user_id');

        return $query->get();
    }

    public function userTransfersData($user, $f_name = null, $f_waste_type = null, $f_cer_code = null, $f_pickup_date = null, $f_request_name = null, $f_request_date = null)
    {
        $query = $this->getModel()
            ->join('waste_type', 'waste_type.id', '=', 'waste.t_waste_id')
            ->join('cer_codes', 'cer_codes.id', '=', 'waste.cer_code_id')
            ->join('transfers', 'transfers.waste_id', '=', 'waste.id')
            ->join('status_transfers', 'status_transfers.id', '=', 'transfers.status_id')
            ->join('users', 'users.id', '=', 'transfers.applicant_user_id')
            ->where('transfers.owner_user_id', '=', $user->getId());

        // Filters
        if($f_name)
            $query = $query->where('waste.name', 'like', '%'.$f_name.'%');

        if($f_waste_type)
            $query = $query->where('waste.t_waste_id', '=', $f_waste_type);

        if($f_cer_code)
            $query = $query->where('waste.cer_code_id', '=', $f_cer_code);

        if($f_pickup_date)
            $query = $query->where('waste.pickup_date', '=', Carbon::createFromFormat('d/m/Y', $f_pickup_date)->format('Y-m-d'));

        if($f_request_name)
            $query = $query->where('users.business_name', 'like', '%'.$f_request_name.'%');

        if($f_request_date)
            $query = $query->where('transfers.transfer_date', '=', Carbon::createFromFormat('d/m/Y', $f_request_date)->format('Y-m-d'));
        // End Filters

        $query = $query->select('waste.id', 'waste.quantity','waste.measured_unit', 'waste.name', DB::raw("CONCAT(cer_codes.code,' - ',cer_codes.name) as cer_code"), 'waste.pickup_date', 'users.business_name as request_name', 'transfers.transfer_date as request_date', 'waste_type.name as type', 'transfers.id as transfer_id', 'status_transfers.display_name as status', 'transfers.status_id', 'waste.owner_user_id', 'transfers.updated_at');

        return $query->get();
    }

    public function userRequestsData($user, $f_name = null, $f_waste_type = null, $f_cer_code = null, $f_pickup_date = null, $f_creator_name = null, $f_request_date = null)
    {
        $query = $this->getModel()
            ->join('waste_type', 'waste_type.id', '=', 'waste.t_waste_id')
            ->join('cer_codes', 'cer_codes.id', '=', 'waste.cer_code_id')
            ->join('transfers', 'transfers.waste_id', '=', 'waste.id')
            ->join('status_transfers', 'status_transfers.id', '=', 'transfers.status_id')
            ->join('users', 'users.id', '=', 'transfers.owner_user_id')
            ->where('transfers.applicant_user_id', '=', $user->getId());

        // Filters
        if($f_name)
            $query = $query->where('waste.name', 'like', '%'.$f_name.'%');

        if($f_waste_type)
            $query = $query->where('waste.t_waste_id', '=', $f_waste_type);

        if($f_cer_code)
            $query = $query->where('waste.cer_code_id', '=', $f_cer_code);

        if($f_pickup_date)
            $query = $query->where('waste.pickup_date', '=', Carbon::createFromFormat('d/m/Y', $f_pickup_date)->format('Y-m-d'));

        if($f_creator_name)
            $query = $query->where('users.business_name', 'like', '%'.$f_creator_name.'%');

        if($f_request_date)
            $query = $query->where('transfers.transfer_date', '=', Carbon::createFromFormat('d/m/Y', $f_request_date)->format('Y-m-d'));
        // End Filters

        $query = $query->select('waste.id', 'waste.quantity','waste.measured_unit', 'waste.name', DB::raw("CONCAT(cer_codes.code,' - ',cer_codes.name) as cer_code"), 'waste.pickup_date', 'users.business_name as creator_name', 'transfers.transfer_date as request_date', 'waste_type.name as type', 'transfers.id as transfer_id', 'status_transfers.display_name as status', 'transfers.status_id', 'waste.creator_user_id', 'transfers.updated_at');

        return $query->get();
    }

    public function allTransfersData($user, $f_name = null, $f_waste_type = null, $f_cer_code = null, $f_create_date_start = null, $f_create_date_end = null, $f_request_name = null, $f_creator_name = null)
    {
        $query = $this->getModel()
            ->join('waste_type', 'waste_type.id', '=', 'waste.t_waste_id')
            ->join('cer_codes', 'cer_codes.id', '=', 'waste.cer_code_id')
            ->join('transfers', 'transfers.waste_id', '=', 'waste.id')
            ->join('status_transfers', 'status_transfers.id', '=', 'transfers.status_id')
            ->join('users as request_user', 'request_user.id', '=', 'transfers.applicant_user_id')
            ->join('users as creator_user', 'creator_user.id', '=', 'transfers.owner_user_id');

        // Filters
        if($f_name)
            $query = $query->where('waste.name', 'like', '%'.$f_name.'%');

        if($f_waste_type)
            $query = $query->where('waste.t_waste_id', '=', $f_waste_type);

        if($f_cer_code)
            $query = $query->where('waste.cer_code_id', '=', $f_cer_code);

        if($f_create_date_start)
            $query = $query->where('transfers.created_at', '>=', Carbon::createFromFormat('d/m/Y', $f_create_date_start)->subDay()->format('Y-m-d H:i:s'));

        if($f_create_date_end)
            $query = $query->where('transfers.created_at', '<=', Carbon::createFromFormat('d/m/Y', $f_create_date_end)->format('Y-m-d H:i:s'));

        if($f_request_name)
            $query = $query->where('request_user.business_name', 'like', '%'.$f_request_name.'%');

        if($f_creator_name)
            $query = $query->where('creator_user.business_name', 'like', '%'.$f_creator_name.'%');

        // End Filters

        $query = $query->select('waste.id', 'waste.quantity','waste.measured_unit', 'waste.name', DB::raw("CONCAT(cer_codes.code,' - ',cer_codes.name) as cer_code"), 'creator_user.business_name as creator_name', 'request_user.business_name as request_name', 'transfers.transfer_date as request_date', 'waste_type.name as type', 'transfers.id as transfer_id', 'status_transfers.display_name as status', 'transfers.status_id', 'transfers.owner_user_id as creator_user_id', 'transfers.applicant_user_id as request_user_id', 'transfers.updated_at');

        return $query->get();
    }

    public function getWasteByMonthYear($month, $year, $type){
        $query = $this->getModel()
            ->where('t_ad_id', '=', $type)
            ->whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->count('id');

        return $query;
    }

}