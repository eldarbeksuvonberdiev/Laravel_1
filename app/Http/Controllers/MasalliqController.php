<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Masalliq;
use Illuminate\Http\Request;

class MasalliqController extends Controller
{
    
    public function index(){
        $model = Masalliq::all();
        return view('masalliq.index',['models'=> $model]);
    }

}
