<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CerCode extends Model
{
    protected $table = 'cer_codes';
    protected $fillable = ['name', 'code', 'cer_subgroup_id'];

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function getCode(){
        return $this->code;
    }

    public function setCode($value){
        $this->code = $value;
    }

    public function setCerSubgroupId($value){
        $this->cer_subgroup_id = $value;
    }

    public function getCerSubgroup(){
        return $this->belongsTo('App\CerSubgroup', 'cer_subgroup_id', 'id');
    }

    public function getWaste(){
        return $this->hasMany('App\Waste', 'cer_code_id', 'id');
    }
}
