<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\Address;
use App\NotificationData;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserRepo extends BaseRepo
{
    public function getModel()
    {
        return new User();
    }

    public function registerUser($name, $activity, $business_name, $cif, $address_line, $postal_code, $province, $locality, $contact_person, $telephone, $email, $not_address_line, $not_contact_person, $not_email, $not_locality, $not_postal_code, $not_province, $not_telephone, $carbon_footprint, $carbon_inscription, $notification_data, $password){

        // Address for user
        $address = new Address();
        $address->setAddressLine($address_line);
        $address->setPostalCode($postal_code);
        $address->setLocalityId($locality);
        $address = $this->updateWithoutData($address);

        // Address for notification_data
        if($notification_data){
            $not_address = new Address();
            $not_address->setAddressLine($not_address_line);
            $not_address->setPostalCode($not_postal_code);
            $not_address->setLocalityId($not_locality);
        }else{
            $not_address = $address->replicate();
        }

        $not_address = $this->updateWithoutData($not_address);

        // User
        $user = $this->getModel();
        $user->setAddressId($address->getId());
        $user->setName($name);
        $user->setActivityId($activity);
        $user->setBusinessName($business_name);
        $user->setCif($cif);
        $user->setContactPerson($contact_person);
        $user->setTelephone($telephone);
        $user->setEmail($email);
        $user->setCarbonFootprint($carbon_footprint);
        $user->setPassword($password);
        if($carbon_inscription)
            $user->setCarbonInscription(Carbon::createFromFormat('d/m/Y', $carbon_inscription));

        $user = $this->updateWithoutData($user);

        $user->assignRole('user');

        // Notification data
        $notification = new NotificationData();
        $notification->setAddressId($not_address->getId());
        $notification->setUserId($user->getId());

        if($notification_data){
            $notification->setContactPerson($not_contact_person);
            $notification->setTelephone($not_telephone);
            $notification->setEmail($not_email);
        }else{
            $notification->setContactPerson($contact_person);
            $notification->setTelephone($telephone);
            $notification->setEmail($email);
        }

        $notification = $this->updateWithoutData($notification);

        return $user;
    }
}