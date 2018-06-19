@extends("products.layout")

@section("content")

<h1>Alla produkter</h1>

<ul class="list-group">
@foreach ($products as $product)
    <li class="list-group-item">
        <a href="products/{{ $product->id }}">{{ $product->title }} ({{ $product->price }})</a>
        <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST" style="float:right; margin-bottom:-5px; margin-top: -3px;">
            @csrf
            @method('DELETE')
            <input type="submit" value="Radera" class="btn btn-danger btn-sm">
        </form>
        <a href="products/{{ $product->id }}/edit" class="btn btn-warning btn-sm" style="float:right;  margin: -3px 5px -5px 0;">Redigera</a>
    </li>
@endforeach
</ul>
@endsection
