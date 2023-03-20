@extends('layouts.app')

@section('head_title', 'Lista categorie')

@section('content')
    <h1 style = "color:red"><center><u>Lista categorie</u><center></h1>

    @if ( session('message') )
        <div class = "alert alert-success" role="alert">
            {{session('message')}}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Categoria</th>
            <th>Num. Post</th>
            <th>Mostra</th>
            <th>Modifica</th>
            <th>Cancella</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <script>
        $('.confirm_delete').click(e => {
            if(!confirm('Sei sicuro di cancellare?')){
                e.preventDefault();
            }
        });

    </script>
@endsection