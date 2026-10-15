@extends('layouts.master')

@section('title')
Users
@endsection

@section('content')
    <div>
        <h1>User List</h1>
        <ul>
            @foreach ($users as $user)
                <li>
                    <h3>Name : {{$user['name']}}</h3>
                    <h3>Age : {{$user['age']}}</h3>
                    <h3>Position : {{$user['position']}}</h3>
                </li>
            @endforeach
        </ul>
    </div>
@endsection