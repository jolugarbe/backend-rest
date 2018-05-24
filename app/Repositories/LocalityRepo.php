<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\Locality;

class LocalityRepo extends BaseRepo
{
    public function getModel()
    {
        return new Locality();
    }

    public function allOrderByName($way){
        $localities = $this->getModel()->orderBy('name', $way)->get();
        return $localities;
    }
}