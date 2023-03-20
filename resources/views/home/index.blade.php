@extends('layouts.app')

@section('head_title', 'Homepage')

@section('content')
    <h1> Prodotti in offerta </h1>

    <br>

    <div style="width:100%; float:left;">
    @foreach($products as $product)
        <div class="card" style="width:29%; margin:2%; padding:1%; float:left; height: 30em; overflow:hidden;">
            <img src="{{ $product->image }}" style="width:50%; display: block; margin-left: auto; margin-right: auto;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $product->title }}</h5>
                <h3> {{ $product->price }}€ </h3>
                <p class="card-text"> {{ substr($product->description, 0, 75); }}</p>
                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
            </div>
        </div>
    @endforeach
</div >
    
@endsection