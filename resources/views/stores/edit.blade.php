@extends("products.layout")

@section("content")

<h1>Redigera: {{ $store->name }}</h1>

<form action="{{ route('stores.update', ['store' => $store->id]) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="name">Namn</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="city">Stad</label>
        <input type="text" class="form-control" id="city" name="city" required>
    </div>

    <button type="submit" class="btn btn-success">Uppdatera butik</button>
</form>

@endsection