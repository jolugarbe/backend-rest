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
    $waste->setCerCode($cer_code);
    $waste->setAdTypeId($ad_type);
    $waste->setAddressId($address->getId());
    $waste->setDescription($description);
    $waste->setPresentation($presentation);
    $waste->setProduction($production);
    $waste->setCreatorId($creator_id);

    $waste = $this->updateWithoutData($waste);

    return $waste;
}

    public function updateWaste($name, $waste_type, $quantity, $measured_unit, $frequency, $composition, $dangerous, $handling, $generation_date, $pickup_date, $packaging, $transport, $cer_code, $ad_type, $address_line, $postal_code, $province, $locality, $description, $presentation, $production, $creator_id, $waste_id, $address_id)
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
        $waste->setCerCode($cer_code);
        $waste->setAdTypeId($ad_type);
        $waste->setAddressId($address->getId());
        $waste->setDescription($description);
        $waste->setPresentation($presentation);
        $waste->setProduction($production);

        $waste = $this->updateWithoutData($waste);

        return $waste;
    }

    public function userOffersData($user)
    {
        $query = $this->getModel()
            ->where('creator_user_id', '=', $user->getId())
            ->whereNull('owner_user_id')
            ->where('t_ad_id', '=', 1);

        return $query;
    }

    public function availableData($user)
    {
        $query = $this->getModel()
            ->where('creator_user_id', '!=', $user->getId())
            ->whereNull('owner_user_id')
            ->where('t_ad_id', '=', 1);

        return $query;
    }

    public function userTransfersData($user)
    {
        $query = $this->getModel()
            ->join('transfers', 'transfers.waste_id', '=', 'waste.id')
            ->join('users', 'users.id', '=', 'transfers.applicant_user_id')
            ->where('waste.creator_user_id', '=', $user->getId())
            ->where('t_ad_id', '=', 1)
            ->select('waste.name', 'waste.composition', 'waste.quantity');

        return $query;
    }

    public function userRequestsData($user)
    {
        $query = $this->getModel()
            ->join('transfers', 'transfers.waste_id', '=', 'waste.id')
            ->join('users', 'users.id', '=', 'transfers.owner_user_id')
            ->where('waste.owner_user_id', '=', $user->getId())
            ->where('t_ad_id', '=', 1)
            ->select('waste.name', 'waste.composition', 'waste.quantity');

        return $query;
    }

}