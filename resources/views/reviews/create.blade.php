@extends("products.layout")

@section("content")

<h1>Lägg till en recension</h1>

<form action="{{ route('reviews.store') }}/{{$product->id}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Namn</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="comment">Kommentar</label>
        <input type="text" class="form-control" id="comment" name="comment" required>
    </div>
    <div class="form-group">
        <label for="grade">Betyg</label>
        <select name="grade">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Spara recension</button>
</form>

@endsection