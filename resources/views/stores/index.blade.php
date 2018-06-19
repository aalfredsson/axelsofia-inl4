@extends("products.layout")

@section("content")
<h1>Alla butiker</h1>

<ul class="list-group">
@foreach ($stores as $store)
    <li class="list-group-item">
        <a href="stores/{{ $store->id }}">{{ $store->name }} ({{ $store->city }})</a>
        <form action="{{ route('stores.destroy', ['store' => $store->id]) }}" method="POST" style="float:right; margin-bottom:-5px; margin-top: -3px;">
            @csrf
            @method('DELETE')
            <input type="submit" value="Radera" class="btn btn-danger btn-sm">
        </form>
        <a href="stores/{{ $store->id }}/edit" class="btn btn-warning btn-sm" style="float:right;  margin: -3px 5px -5px 0;">Redigera</a>
    </li>
@endforeach
</ul>
<a href="stores/create" class="btn btn-lg btn-success" style ="margin-top: 20px;">Lägg till butik</a>
@endsection