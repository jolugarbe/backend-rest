<?php

namespace App\Http\Controllers\Api;

use App\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProvinceController extends Controller
{
    public function all()
    {
        $provinces = Province::orderBy('name')->get();
        return response()->json(compact('provinces'), 200);
    }
}
