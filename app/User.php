<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function setActivityId($value){
        $this->activity_id = $value;
    }

    public function getBusinessName(){
        return $this->business_name;
    }

    public function setBusinessName($value){
        $this->business_name = $value;
    }

    public function getCif(){
        return $this->cif;
    }

    public function setCif($value){
        $this->cif = $value;
    }

    public function getContactPerson(){
        return $this->contact_person;
    }

    public function setContactPerson($value){
        $this->contact_person = $value;
    }

    public function getTelephone(){
        return $this->telephone;
    }

    public function setTelephone($value){
        $this->telephone = $value;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($value){
        $this->email = $value;
    }

    public function getCarbonFootprint(){
        return $this->carbon_footprint;
    }

    public function setCarbonFootprint($value){
        $this->carbon_footprint = $value;
    }

    public function getCarbonInscription(){
        return $this->carbon_inscription;
    }

    public function setCarbonInscription($value){
        $this->carbon_inscription = $value;
    }

    public function getAddress(){
        return $this->hasOne('App\Address', 'address_id', 'id');
    }

    public function setAddressId($value){
        $this->address_id = $value;
    }

    public function getActivity(){
        return $this->belongsTo('App\Activity', 'activity_id', 'id');
    }

    public function getNotificationData(){
        return $this->hasOne('App\NotificationData', 'user_id', 'id');
    }

    public function getWasteCreated(){
        return $this->hasMany('App\Waste', 'creator_user_id', 'id');
    }

    public function getRequestedWaste(){
        return $this->hasMany('App\Waste', 'owner_user_id', 'id');
    }

    public function getTransfers(){
        return $this->hasMany('App\Transfer', 'owner_user_id', 'id');
    }

    public function getRequests(){
        return $this->hasMany('App\Transfer', 'applicant_user_id', 'id');
    }

    public function setPassword($value){
        $this->password = bcrypt($value);
    }
}
