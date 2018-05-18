<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $table = 'transfers';

    protected $fillable = [
        'owner_user_id', 'applicant_user_id', 'waste_id', 'transfer_date'
    ];

    public function getId(){
        return $this->id;
    }

    public function getTransferDate(){
        return $this->transfer_date;
    }

    public function setTransferDate($value){
        $this->transfer_date = $value;
    }

    public function getOwnerWaste(){
        return $this->belongsTo('App\User', 'owner_user_id', 'id');
    }

    public function getApplicantUser(){
        return $this->belongsTo('App\User', 'applicant_user_id', 'id');
    }

    public function getWaste(){
        return $this->belongsTo('App\Waste', 'waste_id', 'id');
    }
}
