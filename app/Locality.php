<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    protected $table = 'localities';

    protected $fillable = [
        'name', 'province_id', 'locality_id',
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

    public function getProvince(){
        return $this->belongsTo('App\Province', 'province_id');
    }

    public function getAddresses(){
        return $this->hasMany('App\Address', 'locality_id', 'id');
    }
}
