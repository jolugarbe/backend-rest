<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\StatusType;

class StatusRepo extends BaseRepo
{
    public function getModel()
    {
        return new StatusType();
    }

    public function allOrderByName($way){
        $status = $this->getModel()->orderBy('name', $way)->get();
        return $status;
    }
}