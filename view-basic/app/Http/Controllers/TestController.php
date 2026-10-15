<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $name = "Aung Myat Moe";
        $age = 39;
        $position = "Full Stack Engineer";
        return view('home',[
            'name' => $name,
            'age' => $age,
            'position' => $position
        ]);
    }
}
