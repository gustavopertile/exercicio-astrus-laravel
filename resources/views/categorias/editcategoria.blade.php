@extends('layouts.main')

@section('title', 'Editando: ' . $categorias->dsCategoria)

@section('content')

    <div id="adicionar-categorias-container" class="col-md-4 offset-md-4">
        <h1>
            <ion-icon name="logo-electron"></ion-icon> Editar categoria {{ $categorias->dsCategoria }}
        </h1>
        <h2>Marca de id {{ $categorias->idCategoria }}</h2>
        <form action="/categorias/update/{{ $categorias->idCategoria }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="dsCategoria">Nome:</label>
                    <textarea class="form-control" id="dsCategoria" name="dsCategoria"
                        placeholder="Nome da Marca">{{ $categorias->dsCategoria }}</textarea>
                </div>
                <input id="botao-cadastrar" type="submit" class="btn btn-primary" value="Editar Marca">
        </form>
    </div>
@endsection
