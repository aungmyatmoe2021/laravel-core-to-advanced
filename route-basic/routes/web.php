<?php

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