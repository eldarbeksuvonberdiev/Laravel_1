<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OnlineDukonController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AdminController::class,'index']);
Route::get('/ind2',[AdminController::class,'index2']);
Route::get('/ind3',[AdminController::class,'index3']);
Route::get('/widget',[AdminController::class,'widget']);
Route::get('/layout1',[AdminController::class,'layout1']);

Route::get('/tostore',[OnlineDukonController::class,'index']);
Route::get('/store2',[OnlineDukonController::class,'store']);
Route::get('/store3',[OnlineDukonController::class,'store3']);
Route::get('/about',[OnlineDukonController::class,'about']);

