@extends('layouts.app')


@section('head_title', 'Mostra categoria')


@section('content')
    <h1 style="color:red"><center><u>Mostra categoria</u></center></h1>

    <div class="my-5">
        <a href="{{ route('categories.index') }}" class="btn btn-info ">➥ Torna alla lista</a> 
        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">✎ Modifica</a>
    </div>

    <table class="table">
        <tbody>
            <tr>
                <td>Nome</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>Descrizione</td>
                <td>{{ $category->description }}</td>
            </tr>
        </tbody>
    </table>

@endsection