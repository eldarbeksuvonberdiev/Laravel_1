<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ovqat;
use Illuminate\Http\Request;

class OvqatController extends Controller
{
    
    public function index(){
        $model = Ovqat::all();
        return view('ovqat.index',['models'=>$model]);
    }

}
