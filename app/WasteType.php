<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WasteType extends Model
{
    protected $table = 'waste_type';
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
        return $this->hasMany('App\Waste', 't_waste_id', 'id');
    }
}
