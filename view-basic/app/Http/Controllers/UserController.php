<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = [
            [
                'name'=>'Aung Myat Moe',
                'age'=>39,
                'position' => 'Full Stack Engineer'
            ],
            [
                'name'=>'Yee Khin Zaw',
                'age'=>39,
                'position' => 'PHP Researcher'
            ],
            [
                'name'=>'Shune Lett Yee Moe',
                'age'=>8,
                'position' => 'Student'
            ]
        ];
        return view('user',[
            'users' => $users
        ]);
    }
}
