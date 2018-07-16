<?php

namespace App\Http\Controllers\Api;

use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function all()
    {
        $activities = Activity::orderBy('group')->get();
        return response()->json(compact('activities'), 200);
    }
}
