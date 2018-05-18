<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrequencyType extends Model
{
    protected $table = 'frequency_type';
    protected $fillable = ['name'];

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function getWaste(){
        return $this->hasMany('App\Waste', 't_frequency_id', 'id');
    }
}
