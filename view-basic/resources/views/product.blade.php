<div>
    <h1>Product List</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <h4>{{$product->id}}</h4>
                <h4>{{$product->name}}</h4>
                <h4>{{$product->price}}</h4>
            </li>
        @endforeach
    </ul>
</div>
