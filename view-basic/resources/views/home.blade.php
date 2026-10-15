@extends('layouts.master')

@section('title')
Home
@endsection

@section('content')
    <div>
        <h1>This is View Section</h1>
        <p>for laravel learning</p>
        <h2>Name : {{$name}}</h2>
        <h2>Age : {{$age}}</h2>
        <h2>Position{{$position}}</h2>

        @if ($age > 18)
            <p>You are Welcome</p>
        @else
            <p>You are under 18</p>
        @endif
    </div>
@endsection
