@extends("products.layout")

@section("content")

<h1>Redigera: {{ $product->title }}</h1>

<form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST" id="updateProductForm">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}" required>
    </div>
    <div class="form-group">
        <label for="price">Pris</label>
        <input type="text" class="form-control" pattern=".{0,6}" title="Priset får inte ha mer än 6 siffror" name="price" value="{{ $product->price }}" required>
    </div>
    <div class="form-group">
        <label for="brand">Märke</label>
        <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}" required>
    </div>
    <div class="form-group">
        <label for="description">Beskrivning</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ $product->description }}" required>
    </div>
    <div class="form-group">
        <label for="image">Länk till bild</label>
        <input type="text" class="form-control" id="image" name="image" value="{{ $product->image }}" required>
    </div>
    <button type="submit" class="btn btn-success">Uppdatera produkt</button>
</form>

@endsection