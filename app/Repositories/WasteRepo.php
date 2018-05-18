<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\Waste;

class WasteRepo extends BaseRepo
{
    public function getModel()
    {
        return new Waste();
    }
}