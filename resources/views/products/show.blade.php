@extends("products.layout")

@section("content")

<div class="row">
    <div class="col-sm-6" style="">
        <h1>{{ $product->title }}</h1>
        <p><strong>Pris:</strong> {{ $product->price }}</p>
        <p>{{ $product->description }}</p>
    </div>
    <div class="col-sm-6">
        <img src="{{ $product->image }}" alt="{{ $product->title }}" style="">
    </div>
</div>
<div class="row" style="padding: 0 10px 0 10px;">
    <div class="col-sm-6 order-lg-12" style=" margin-left: 15px;">
        <h4>Finns i följande affärer</h4>
        <ul>
            @foreach ($product->stores as $store)

                <li>{{ $store->name }} (<i>{{ $store->city }}</i>)</li>
            @endforeach
        </ul>
    </div>
    @yield("reviews")
</div>

@endsection