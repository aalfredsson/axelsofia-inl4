@extends("products.layout")

@section("content")

<div>
    <div style="max-width: 600px; float: left;">
        <h1>{{ $store->name }}</h1>
        <p><strong>Stad:</strong> {{ $store->city }}</p>
        
        <ul>
            @foreach ($store->products as $product)
            <li>{{ $product->title }}</li>
            @endforeach
        </ul>
    </div>
</div>

@endsection