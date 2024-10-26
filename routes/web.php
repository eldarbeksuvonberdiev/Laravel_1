<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyProductController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\OnlineDukonController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('/tostore',[OnlineDukonController::class,'index']);
Route::get('/store2',[OnlineDukonController::class,'store']);
Route::get('/store3',[OnlineDukonController::class,'store3']);
Route::get('/about',[OnlineDukonController::class,'about']);

//Category routes
Route::get('/',[CategoryController::class,'index']);
Route::get('/category-create',[CategoryController::class,'create']);
Route::post('/create',[CategoryController::class,'store']);
Route::get('/category/{id}',[CategoryController::class,'view']);
Route::delete('/category/{id}',[CategoryController::class,'delete']);

//Product routes
Route::get('/products',[ProductController::class,'index']);
Route::get('/product-create',[ProductController::class,'create']);
Route::post('/product-create',[ProductController::class,'store']);
Route::get('/products/{id}',[ProductController::class,'view']);
Route::delete('/products/{id}',[ProductController::class,'delete']);

//Orders routes
Route::get('/orders',[OrderController::class,'index']);
Route::get('/order-create',[OrderController::class,'create']);
Route::post('/order-create',[OrderController::class,'store']);
Route::get('/orders/{id}',[OrderController::class,'view']);
Route::delete('/orders/{id}',[OrderController::class,'delete']);

//Posts routes
Route::get('/posts',[PostController::class,'index']);
Route::get('/post-create',[PostController::class,'create']);
Route::get('/posts/{id}',[PostController::class,'view']);
Route::post('/post-create',[PostController::class,'store']);
Route::delete('/posts/{id}',[PostController::class,'delete']);

//Likes routes
Route::get('/likes',[LikeController::class,'index']);
Route::get('/like-create',[LikeController::class,'create']);
Route::post('/likes',[LikeController::class,'store']);
Route::get('/likes/{id}',[LikeController::class,'view']);
Route::delete('/likes/{id}',[LikeController::class,'delete']);

//Comments routes
Route::get('/comments',[CommentController::class,'index']);
Route::get('/comment-create',[CommentController::class,'create']);
Route::post('/comment',[CommentController::class,'store']);
Route::get('/comments/{id}',[CommentController::class,'view']);
Route::delete('/comments/{id}',[CommentController::class,'delete']);

//User routes
Route::get('/users',[UsersController::class,'index']);
Route::get('/users-create',[UsersController::class,'create']);
Route::post('/users',[UsersController::class,'store']);
Route::get('/users/{id}',[UsersController::class,'view']);
Route::delete('/users/{id}',[UsersController::class,'delete']);


//Company routes
Route::get('/company/{id}',[CompanyController::class,'index']);
Route::post('/company',[CompanyController::class,'store']);
Route::get('/companies/{id}',[CompanyController::class,'view']);
Route::delete('/company/{id}',[CompanyController::class,'delete']);

//Companyproducts routes
Route::get('/companyproducts/{id}',[CompanyProductController::class,'index']);
Route::post('/product-search/{id}',[CompanyProductController::class,'search']);
Route::post('/companyproduct/{id}',[CompanyProductController::class,'store']);
Route::put('/companyproduct/{id}',[CompanyProductController::class,'update']);
Route::delete('/companyproducts/{id}',[CompanyProductController::class,'delete']);
