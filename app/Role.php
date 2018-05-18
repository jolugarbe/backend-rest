<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    function getId(){
        return $this->id;
    }

    function getDisplayName(){
        return $this->display_name;
    }

    function getName(){
        return $this->name;
    }
}
