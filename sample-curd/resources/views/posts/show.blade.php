@extends('layouts.master')
@section('title','Post - Show Page')
@section('content')
    <div>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <h1 class="text-center">{{ $post->title }}</h1>
                </div>
                <div class="card-body">
                    <img src={{ $post->image }} alt="image" class="w-50 ">
                    <p>{{ $post->content }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection