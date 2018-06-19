@extends("products.layout")

@section("content")

<h1>Lägg till en produkt</h1>

<form action="{{ route('stores.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Namn</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="city">Stad</label>
        <input type="text" class="form-control" id="city" name="city" required>
    </div>


    <button type="submit" class="btn btn-success">Spara butik</button>
</form>

@endsection