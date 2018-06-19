@extends("products.layout")

@section("content")
<h1>Alla recensioner</h1>

<div>
@foreach ($reviews as $review)
    <div class="card">
        <div class="card-header">
            {{ $review->name }}
            <span style="float: right">{{ $review->grade }}/5</span>
        </div>
        <div class="card-body row">
            <div class="col-6">
                {{$review->comment}}
            </div>
            <div class="col-6">
                <form action="{{ route('reviews.destroy', ['review' => $review->id]) }}" method="POST" style="float:right; margin-bottom:-5px; margin-top: -3px;">
                    @csrf 
                    @method('DELETE')
                    <input type="submit" value="Radera" class="btn btn-danger btn-sm"> 
                </form> 
                <a href="reviews/{{ $review->id }}/edit" class="btn btn-warning btn-sm" style="float:right; margin: -3px 5px -5px 0;">Redigera</a> 
            </div>
        </div>
    </div>
@endforeach
</div>
@endsection