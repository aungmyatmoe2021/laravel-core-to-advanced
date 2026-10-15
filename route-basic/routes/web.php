<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',function() {
    return "Helllo Laravel Project";
});


// Route Parameters
// -----------------------
// 1. Path Parameters
// 2. Query Parameters
// 3. Optional Parameters

// 1. Path Parameters
Route::get('/user/{id}',function($id){
    return "User ID ".$id;
});


// 2. Query Parameters
Route::get('/search ',function(){
    return "Search Query :  ". request('name'); 
});


// 3. Optional Parameters
Route::get('/user/{name?}',function($name = "unkonwn"){
    return "User name is ".$name;
});

Route::get('/test',[TestController::class, 'test']);

// Blogs
Route::get('/blogs',[BlogController::class, 'index']);
Route::get('/blogs/{id}',[BlogController::class,'show']);
Route::get('/blogs',[BlogController::class,'create']);
Route::post('/blogs',[BlogController::class,'store']);
Route::get('/blogs/{id}',[BlogController::class,'edit']);
Route::post('/blogs/{id}',[BlogController::class,'update']);
Route::post('/blogs/{id}',[BlogController::class,'destroy']);

// Resource Controller and Resource Route
Route::resource('/products',ProductController::class);