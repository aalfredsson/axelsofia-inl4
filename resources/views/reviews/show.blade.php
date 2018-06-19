@extends("products.show")

@section("reviews")


<div class="col-12 col-lg-6 row order-lg-1">
    <div class="col-12 row" style="padding: 0;">
        <h3 class="col-6">Recensioner</h3>
        <a href="{{ route('reviews.create') }}/{{ $product->id }}"   class="btn btn-primary ml-auto d-none d-md-block" style="margin-right: 15px;">Lägg till recension</a>
        <a href="{{ route('reviews.create') }}"  class="btn col-xs-6 btn-primary ml-auto d-block d-md-none" style="margin-right: 15px;">+</a>
    </div>
    <div class="row" style="margin-right: 30px; margin-left: 0; width: 100%;">
    @foreach ($product->reviews as $review)
        <div class="card col-lg-12" style=" margin-bottom: 15px; padding: 0;">
            <div class="card-header">
                <h6 class="card-title" style="margin-bottom: 0;">{{$review->name}} <small style="float: right;">
                {{$review->grade}}/5
                </small>
                </h6>
            </div>
            <div class="card-body row">
                <div class="col-6">
                    {{$review->comment}}
                </div>

            </div>
        </div>
    @endforeach
    
    </div> 
</div>


@endsection