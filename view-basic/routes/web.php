<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[TestController::class,'index']);

Route::get('/user',[UserController::class,'index']);

Route::get('/product',[ProductsController::class,'index']);