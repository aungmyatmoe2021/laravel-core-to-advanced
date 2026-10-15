@extends('layouts.master')

@section('title')
Products
@endsection

@section('content')
    <div>
        <h1>Product List</h1>
        <ul>
            {{-- @if (count($products) > 0)
                @foreach ($products as $product)
                    <li>
                        <h4>{{$product->id}}</h4>
                        <h4>{{$product->name}}</h4>
                        <h4>{{$product->price}}</h4>
                    </li>
                @endforeach
            @else
                <div>No Data Found</div>
            @endif --}}

            @forelse ($products as $product)
                <li>
                    <h4>{{$product->id}}</h4>
                    <h4>{{$product->name}}</h4>
                    <h4>{{$product->price}}</h4>
                </li>
            @empty
                <div>No Data Found</div>
            @endforelse
        </ul>
    </div>
@endsection
