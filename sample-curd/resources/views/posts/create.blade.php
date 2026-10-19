@extends('layouts.master')
@section('title','Post - Create Page')
@section('content')
    <div class="container">
        <div class="col"></div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Post Create Form</h1>
                </div>
                <div class="card-body">
                    <form action="/posts" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                            @error('title')
                                <div class="fg-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Content</label>
                            <input type="text" name="content" class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}">
                            @error('content')
                                <div class="fg-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Image URL</label>
                            <input type="text" name="image" class ="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}">
                            @error('image')
                                <div class="fg-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn-solid theme-primary">Create Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
@endsection
