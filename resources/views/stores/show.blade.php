@extends("products.layout")

@section("content")

<div>
    <div style="max-width: 600px; float: left;">
        <h1>{{ $store->name }}</h1>
        <p><strong>Stad:</strong> {{ $store->city }}</p>
    </div>
</div>

@endsection