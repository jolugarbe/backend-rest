<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\Transfer;

class TransferRepo extends BaseRepo
{
    public function getModel()
    {
        return new Transfer();
    }
}