<?php

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