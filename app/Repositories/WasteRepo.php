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
        $waste->setOwnerId($creator_id);

        $waste = $this->updateWithoutData($waste);

        return $waste;
    }
}