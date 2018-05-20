<?php

namespace App\Http\Controllers\Api;

use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function all()
    {
        $activities = Activity::all();
        return response()->json(compact('activities'), 200);
    }
}
