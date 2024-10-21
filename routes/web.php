<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AdminController::class,'index']);
Route::get('/ind2',[AdminController::class,'index2']);
Route::get('/ind3',[AdminController::class,'index3']);
Route::get('/widget',[AdminController::class,'widget']);
Route::get('/layout1',[AdminController::class,'layout1']);

