@extends('layouts.app')


@section('head_title', 'Modifica categoria')


@section('content')
    <h1 style="color:red"><center><u>Modifica categoria</u></center></h1>
    
    @include('partials.form-errors')

    <form method="post" action="{{ route('categories.update', $category) }}">  
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Nome categoria</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Modifica categoria..." value="{{ $category->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione categoria</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Inserisci la descrizione della categoria...">{{ $category->description }}</textarea>
        </div>
        <center>
            <button class="btn btn-primary">Effettua Modifica</button>
        </center>
    </form>

@endsection