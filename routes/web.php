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


Route::get('/tostore',[OnlineDukonController::class,'index']);
Route::get('/store2',[OnlineDukonController::class,'store']);
Route::get('/store3',[OnlineDukonController::class,'store3']);
Route::get('/about',[OnlineDukonController::class,'about']);

Route::get('/',[CategoryController::class,'index']);
Route::get('/category-create',[CategoryController::class,'create']);
Route::post('/create',[CategoryController::class,'store']);


Route::get('/products',[ProductController::class,'index']);
Route::get('/orders',[OrderController::class,'index']);
Route::get('/posts',[PostController::class,'index']);
Route::get('/likes',[LikeController::class,'index']);
Route::get('/comments',[CommentController::class,'index']);


