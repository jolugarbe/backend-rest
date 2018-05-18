<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table = 'activities';

    protected $fillable = [
        'group', 'code', 'name',
    ];

    public function getId(){
        return $this->id;
    }

    public function getGroup(){
        return $this->group;
    }

    public function setGroup($value){
        $this->group = $value;
    }

    public function getCode(){
        return $this->code;
    }

    public function setCode($value){
        $this->code = $value;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($value){
        $this->name = $value;
    }

    public function getUsers(){
        return $this->hasMany('App\User', 'activity_id', 'id');
    }
}
