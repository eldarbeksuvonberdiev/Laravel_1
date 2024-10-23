<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\OnlineDukonController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
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

Route::get('/categories',[CategoryController::class,'index']);
Route::get('/products',[ProductController::class,'index']);
Route::get('/orders',[OrderController::class,'index']);
Route::get('/posts',[PostController::class,'index']);
Route::get('/likes',[LikeController::class,'index']);
Route::get('/comment',[CommentController::class,'index']);

