<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusType extends Model
{
    protected $table = 'status_transfers';

    function getId(){
        return $this->id;
    }

    function getDisplayName(){
        return $this->display_name;
    }

    function getName(){
        return $this->name;
    }

    function getTransfers(){
        return $this->hasMany('App\Transfers', 'status_id', 'id');
    }
}
