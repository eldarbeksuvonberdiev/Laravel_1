<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OnlineDukonController extends Controller
{

    public function index(){
        return view('onlinestore/onlinestore/index');
    }

    public function store(){
        return view('onlinestore/onlinestore/store');
    }

    public function store3(){
        return view('onlinestore/onlinestore/store3');
    }

    public function about(){
        return view('onlinestore/onlinestore/about');
    }
}
