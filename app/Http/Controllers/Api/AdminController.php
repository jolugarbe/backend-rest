<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\ActivityRepo;
use App\Repositories\AddressRepo;
use App\Repositories\LocalityRepo;
use App\Repositories\ProvinceRepo;
use App\Repositories\TransferRepo;
use App\Repositories\UserRepo;
use App\Repositories\WasteRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    protected $userRepo;
    protected $addressRepo;
    protected $activityRepo;
    protected $localityRepo;
    protected $provinceRepo;
    protected $transferRepo;
    protected $wasteRepo;

    function __construct(UserRepo $userRepo, AddressRepo $addressRepo, ActivityRepo $activityRepo, LocalityRepo $localityRepo, ProvinceRepo $provinceRepo, TransferRepo $transferRepo, WasteRepo $wasteRepo)
    {
        $this->userRepo = $userRepo;
        $this->addressRepo = $addressRepo;
        $this->activityRepo = $activityRepo;
        $this->localityRepo = $localityRepo;
        $this->provinceRepo = $provinceRepo;
        $this->transferRepo = $transferRepo;
        $this->wasteRepo = $wasteRepo;
    }

    public function dashboardData()
    {
        try{
            Log::info('ENTRA EN DASHBOARD DATA');
            $user = Auth::user();
            $total_users = $this->userRepo->all()->count();
            $total_transfers = $this->transferRepo->all()->count();
            $total_demand = $this->wasteRepo->getModel()->where('t_ad_id', '=', 2)->count();
            $total_offers = $this->wasteRepo->getModel()->where('t_ad_id', '=', 1)->count();

            return response()->json(['user' => $user, 'total_users' => $total_users, 'total_transfers' => $total_transfers, 'total_demand' => $total_demand, 'total_offers' => $total_offers], 200);
        }catch (\Exception $exception){
            return response()->json(['exception' => $exception->getMessage()], 500);
        }
    }
}
