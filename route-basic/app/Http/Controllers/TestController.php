<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return "<div>Hello This is test route</div>";
    }

    public function show($id)
    {
        return "<div>ID : $id</div>";
    }

    public function test($id){
        return "<div>ID : $id and Query is ".request('name')."</div>";
    }
}
