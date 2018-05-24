<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\WasteType;

class WasteTypeRepo extends BaseRepo
{
    public function getModel()
    {
        return new WasteType();
    }

    public function allOrderByName($way){
        $types = $this->getModel()->orderBy('name', $way)->get();
        return $types;
    }
}