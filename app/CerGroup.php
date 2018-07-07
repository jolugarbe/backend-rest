<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CerGroup extends Model
{
    protected $table = 'cer_groups';
    protected $fillable = ['name', 'code'];

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

    public function getCerSubgroups(){
        return $this->hasMany('App\CerSubgroup', 'cer_group_id', 'id');
    }
}
