@extends("products.layout")

@section("content")

<h1>Uppdatera recension</h1>

<form action="{{ route('reviews.update', ['review' => $review->id])}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="name">Namn</label>
        <input type="text" value="{{$review->name}}" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="comment">Kommentar</label>
        <input type="text" value="{{$review->comment}}" class="form-control" id="comment" name="comment" required>
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
    <button type="submit" class="btn btn-success">Uppdatera recension</button>
</form>
@endsection