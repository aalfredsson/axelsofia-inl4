@extends("products.layout")

@section("content")

<h1>Lägg till en produkt</h1>

<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="price">Pris</label>
        <input type="text" class="form-control" id="price" name="price" required>
    </div>
    <div class="form-group">
        <label for="brand">Märke</label>
        <input type="text" class="form-control" id="brand" name="brand" required>
    </div>
    <div class="form-group">
        <label for="description">Beskrivning</label>
        <input type="text" class="form-control" id="description" name="description" required>
    </div>
    <div class="form-group">
        <label for="image">Länk till bild</label>
        <input type="text" class="form-control" id="image" name="image" required>
    </div>

    <button type="submit" class="btn btn-success">Spara produkt</button>
</form>

@endsection