@extends("products.layout")

@section("content")
<h1 style="padding-bottom: 30px; padding-top: 20px">Alla recensioner</h1>

<div>
@foreach ($reviews as $review)
    <div class="card" style="margin-bottom: 20px;">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <p style="margin-right: 40px; margin-bottom: 0">
                    <strong>Recensent:</strong> 
                    {{ $review->name }}
                </p>
                <p style="margin-bottom: 0"><strong>Produkt: </strong> {{ $review->product->title }}</p>
            </div>
            <p style="margin-bottom: 0"><strong>Betyg: </strong> {{ $review->grade }}/5</p>
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