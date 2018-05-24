<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\FrequencyType;

class FrequencyRepo extends BaseRepo
{
    public function getModel()
    {
        return new FrequencyType();
    }

    public function allOrderByName($way){
        $frequencies = $this->getModel()->orderBy('name', $way)->get();
        return $frequencies;
    }
}