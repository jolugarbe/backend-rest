<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    protected $fillable = [
        'address_line', 'postal_code', 'locality_id',
    ];

    public function getId(){
        return $this->id;
    }

    public function getAddressLine(){
        return $this->address_line;
    }

    public function setAddressLine($value){
        $this->address_line = $value;
    }

    public function getPostalCode(){
        return $this->postal_code;
    }

    public function setPostalCode($value){
        $this->postal_code = $value;
    }

    public function getLocality(){
        return $this->belongsTo('App\Locality', 'locality_id', 'id');
    }

    public function setLocalityId($value){
        $this->locality_id = $value;
    }

    public function getNotificationData(){
        return $this->hasOne('App\NotificationData', 'address_id', 'id');
    }

    public function getWaste(){
        return $this->belongsTo('App\Waste', 'address_id', 'id');
    }

    public function getUser(){
        return $this->hasOne('App\User', 'address_id', 'id');
    }
}
