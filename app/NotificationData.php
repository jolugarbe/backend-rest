<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotificationData extends Model
{

    protected $table = 'notification_data';
    protected $fillable = ['address_id', 'contact_person', 'telephone', 'email', 'user_id'];

    public function getId(){
        return $this->id;
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

    public function getAddress(){
        return $this->belongsTo('App\Address', 'address_id', 'id');
    }

    public function setAddressId($value){
        $this->address_id = $value;
    }

    public function getUser(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function setUserId($value){
        $this->user_id = $value;
    }
}
