@extends("products.layout")

@section("content")

<div style="width: 100%;">
    <h1>{{ $store->name }}</h1>
    <p><strong>Stad:</strong> {{ $store->city }}</p>
    
    <ul class="list-group" style="margin-top: 50px">
        <h3 style="font-size: 1.25rem">Produkter i denna butik</h3>
        @foreach ($store->products as $product)
        <li class="list-group-item">{{ $product->title }}</li>
        @endforeach
    </ul>
</div>

@endsection