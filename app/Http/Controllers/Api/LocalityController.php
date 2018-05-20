<?php

namespace App\Http\Controllers\Api;

use App\Locality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalityController extends Controller
{
    public function all()
    {
        $localities = Locality::orderBy('name')->get();
        return response()->json(compact('localities'), 200);
    }
}
