@extends("products.layout")

@section("content")
<h1>Välkommen</h1>
<p>Den här sidan presenterar ett utbud av produkter som finns i sortimentet 
och i vilka butiker de finns. Även recensioner till produkterna finns att läsa.
Du som registrerad användare av sidan kan lägga till produkter på sidan,
vilken butik den finns i och lägga till/ändra/ta bort recensioner/butiker
och produkter.</p>
<div class="row" style="justify-content: space-around; margin-right: 30px; margin-left: 0; width: 100%;">
        <div class="card col-lg-5" style=" margin-bottom: 15px; padding: 10px;">
            <div class="card-header" style="border: 1px solid rgba(0,0,0,.125); padding: 10% 0 10% 0;">
                <h6 class="card-title" style="text-align: center; margin-bottom: 0;">
                    <a href="{{ route('products.index') }}" style="text-decoration: none;">Produkter</a>
                </h6>
            </div>
        </div>    
        <div class="card col-lg-5" style=" margin-bottom: 15px; padding: 10px;">
            <div class="card-header" style="border: 1px solid rgba(0,0,0,.125); padding: 10% 0 10% 0;">
                <h6 class="card-title" style=" text-align: center;margin-bottom: 0;">
                <a href="{{ route('stores.index') }}" style="text-decoration: none;">Butiker</a>
                </h6>
            </div>
        </div>    
        <div class="card col-lg-5" style="margin-bottom: 15px; padding: 10px;">
            <div class="card-header" style="border: 1px solid rgba(0,0,0,.125); padding: 10% 0 10% 0;">
                <h6 class="card-title" style="  text-align: center;margin-bottom: 0;">
                <a href="{{ route('reviews.index') }}" style="text-decoration: none;">Recensioner</a>
                </h6>
            </div>
        </div>    
</div> 
@endsection