<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CerSubgroup extends Model
{
    protected $table = 'cer_subgroups';
    protected $fillable = ['name', 'code', 'cer_group_id'];

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

    public function setCerGroupId($value){
        $this->cer_subgroup_id = $value;
    }

    public function getCerGroup(){
        return $this->belongsTo('App\CerGroup', 'cer_group_id', 'id');
    }

    public function getCerCodes(){
        return $this->hasMany('App\CerCode', 'cer_subgroup_id', 'id');
    }
}
