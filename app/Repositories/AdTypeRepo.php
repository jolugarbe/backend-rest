<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\AdType;

class AdTypeRepo extends BaseRepo
{
    public function getModel()
    {
        return new AdType();
    }

    public function allOrderByName($way){
        $ads = $this->getModel()->orderBy('name', $way)->get();
        return $ads;
    }
}