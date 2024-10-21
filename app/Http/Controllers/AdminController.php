<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin/pages/index1');
    }

    public function index2(){
        return view('admin/pages/index2');
    }

    public function index3(){
        return view('admin/pages/index3');
    }
 
    public function widget(){
        return view('admin/pages/widget');
    }
}
