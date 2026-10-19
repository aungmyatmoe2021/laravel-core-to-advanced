@extends('layouts.master')
@section('title','Post - Home Page')
@section('content')
    <div class="container">
        <h1>Post Lists</h1>
        @if (session('message'))
            <div class="alert theme-warning" role="alert">
                <p>{{ session('message') }}</p>
                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <a href='/posts/create' class="btn-solid theme-primary">Create Blog</a>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-3">
                    <card class="card mt-2">
                        <div class="card-header">
                            {{ $post->title }}
                        </div>
                        <div class="card-body">
                            <img src={{$post->image}} alt="image" class="w-100" style="height: 200px;">
                            {{ Str::limit($post->content, 100, '...') }}
                        </div>
                        <div class="card-footer">
                            <a href={{ route('posts.show', $post->id) }} class="btn-solid theme-primary btn-sm">See More ...</a>
                            <a href="#" class="btn-solid theme-secondary btn-sm">Edit</a>
                            <a href="#" class="btn-solid theme-danger btn-sm">Delete</a>
                        </div>
                    </card>
                </div>
            @endforeach
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>

    </div>
@endsection