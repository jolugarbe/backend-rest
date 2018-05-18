<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = ['name', 'country_id'];

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function getCountry(){
        return $this->belongsTo('App\Country', 'country_id');
    }

    public function getLocalities(){
        return $this->hasMany('App\Locality', 'province_id', 'id');
    }
}
