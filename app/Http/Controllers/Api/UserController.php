<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Return data of the authenticated user.
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile()
    {
        $user = Auth::user();
        $total_waste = $user->getRequestedWaste->count();
        $total_transfers = $user->getTransfers->count();
        $total_requests = $user->getRequests->count();
        return response()->json(['user' => $user, 'total_waste' => $total_waste, 'total_transfers' => $total_transfers, 'total_requests' => $total_requests], 200);
    }
}
