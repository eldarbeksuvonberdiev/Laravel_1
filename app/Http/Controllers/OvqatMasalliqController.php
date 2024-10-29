<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OvqatMasalliq;
use Illuminate\Http\Request;

class OvqatMasalliqController extends Controller
{
    
    public function index(){
        $model = OvqatMasalliq::all();
        return view('ovqatmasalliq.index',['models'=>$model]);
    }
}
