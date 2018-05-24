<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\Province;

class ProvinceRepo extends BaseRepo
{
    public function getModel()
    {
        return new Province();
    }

    public function allOrderByName($way){
        $provinces = $this->getModel()->orderBy('name', $way)->get();
        return $provinces;
    }
}