<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 22/04/2018
 * Time: 20:09
 */

namespace App\Repositories;


use App\Transfer;
use Carbon\Carbon;

class TransferRepo extends BaseRepo
{
    public function getModel()
    {
        return new Transfer();
    }

    public function transferWaste($creator_user_id, $request_user_id, $waste_id){

        $transfer = $this->getModel();
        $transfer->setTransferDate(Carbon::now());
        $transfer->setOwnerWasteId($creator_user_id);
        $transfer->setApplicantUserId($request_user_id);
        $transfer->setWasteId($waste_id);
        $transfer->setTransferDate(Carbon::now());
        $transfer->setStatusId(1);
        $transfer = $this->updateWithoutData($transfer);
        return $transfer;
    }

    public function getTransfersByMonthYear($month, $year){
        $query = $this->getModel()
            ->whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->count('id');

        return $query;
    }
}