<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function index(){
        return view("test");
    }

    public function formsubmit(Request $request){
        $validate = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email'

        ]);
        if($validate->fails()){
            dd("Invalid");
        }else{
            dd("Valid");
        }
    }
}
