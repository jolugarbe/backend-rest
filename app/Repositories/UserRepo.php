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
use Illuminate\Support\Facades\DB;

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

    public function updateUser($user, $name, $activity, $business_name, $cif, $address_line, $postal_code, $province, $locality, $contact_person, $telephone, $email, $not_address_line, $not_contact_person, $not_email, $not_locality, $not_postal_code, $not_province, $not_telephone, $carbon_footprint, $carbon_inscription, $notification_data, $created_at = null){

        // Address for user
        $address = $user->getAddress;
        $address->setAddressLine($address_line);
        $address->setPostalCode($postal_code);
        $address->setLocalityId($locality);
        $address = $this->updateWithoutData($address);

        // User
        $user->setAddressId($address->getId());
        $user->setName($name);
        $user->setActivityId($activity);
        $user->setBusinessName($business_name);
        $user->setCif($cif);
        $user->setContactPerson($contact_person);
        $user->setTelephone($telephone);
        $user->setEmail($email);
        $user->setCarbonFootprint($carbon_footprint);

        if($created_at)
            $user->created_at = Carbon::createFromFormat('d/m/Y', $created_at);

        if($carbon_footprint == 1)
            $user->setCarbonInscription(Carbon::createFromFormat('d/m/Y', $carbon_inscription));
        else
            $user->setCarbonInscription(null);

        $user = $this->updateWithoutData($user);

        if($notification_data){
            // Address for notification_data
            $not_address = $user->getNotificationData->getAddress;
            $not_address->setAddressLine($not_address_line);
            $not_address->setPostalCode($not_postal_code);
            $not_address->setLocalityId($not_locality);
            $not_address = $this->updateWithoutData($not_address);

            // Notification data
            $notification = $user->getNotificationData;
            $notification->setAddressId($not_address->getId());
            $notification->setContactPerson($not_contact_person);
            $notification->setTelephone($not_telephone);
            $notification->setEmail($not_email);
            $notification = $this->updateWithoutData($notification);
        }

        return $user;
    }

    public function usersListData($user, $f_business_name, $f_activity, $f_cif, $f_register_from, $f_register_until, $f_carbon_footprint, $f_carbon_from, $f_carbon_until)
    {
        $query = $this->getModel()
            ->leftJoin('addresses', 'addresses.id', '=', 'users.address_id')
            ->join('activities', 'activities.id', '=', 'users.activity_id')
            ->where('users.id', '<>', $user->getId());

        // Filters
        if($f_business_name)
            $query = $query->where('users.business_name', 'like', '%'.$f_business_name.'%');

        if($f_activity)
            $query = $query->where('users.activity_id', '=', $f_activity);

        if($f_cif)
            $query = $query->where('users.cif', 'like', '%'.$f_cif.'%');

        if($f_register_from)
            $query = $query->where('users.created_at', '>=', Carbon::createFromFormat('d/m/Y', $f_register_from)->subDay()->format('Y-m-d H:i:s'));

        if($f_register_until)
            $query = $query->where('users.created_at', '<=', Carbon::createFromFormat('d/m/Y', $f_register_until)->format('Y-m-d H:i:s'));

        if($f_carbon_footprint != 'all')
            $query = $query->where('users.carbon_footprint', '=', $f_carbon_footprint);

        if($f_carbon_from)
            $query = $query->where('users.carbon_inscription', '>=', Carbon::createFromFormat('d/m/Y', $f_carbon_from)->format('Y-m-d'));

        if($f_carbon_until)
            $query = $query->where('users.carbon_inscription', '<=', Carbon::createFromFormat('d/m/Y', $f_carbon_until)->format('Y-m-d'));
        // End Filters

        $query = $query->select('users.id', 'users.business_name', DB::raw("CONCAT('GRUPO ',activities.group,' - ',activities.name) as activity"), 'users.cif', 'users.created_at as register_date', 'users.carbon_footprint', 'users.carbon_inscription');

        return $query->get();
    }

    public function getUsersByMonthYear($month, $year){
        $query = $this->getModel()
            ->whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->count('id');

        return $query;
    }

    public function updateAdminUser($user, $name, $address_line, $postal_code, $province, $locality, $telephone, $email){

        // Address for user
        $address = $user->getAddress;
        $address->setAddressLine($address_line);
        $address->setPostalCode($postal_code);
        $address->setLocalityId($locality);
        $address = $this->updateWithoutData($address);

        // User
        $user->setAddressId($address->getId());
        $user->setName($name);
        $user->setTelephone($telephone);
        $user->setEmail($email);

        $user = $this->updateWithoutData($user);

        return $user;
    }
}