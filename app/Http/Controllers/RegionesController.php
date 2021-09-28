<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionesController extends Controller
{
    public function listarRegion(Request $request){

        $response = \DB::table('region')->get();

       return response()->json($response);

    }
}
