@extends('layouts.app')


@section('head_title', 'Crea nuova categoria')


@section('content')
    <h1 style="color:red"><center><u>Crea nuova categoria</u></center></h1>

    @include('partials.form-errors')

    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome categoria</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci nuova categoria..." value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione categoria</label>
            <textarea type="text" class="form-control" id="description" name="description" placeholder="Inserisci la descrizione della categoria...">{{ old('description') }}</textarea>
        </div>
        <center>
            <button class="btn btn-primary">Inserisci categoria</button>
        </center>
    </form>

@endsection