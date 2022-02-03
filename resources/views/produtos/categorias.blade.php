@extends('layouts.main')

@section('title', 'Categorias')

@section('content')
    <div id="categorias-existentes" class="col-md-6 offset-md-3">
        <h1>
            <ion-icon name="logo-react"></ion-icon>Marcas Existentes
        </h1>

        <table class="table table-light">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <th scope="row">{{ $categoria->idCategoria }}</th>
                        <td>{{ $categoria->dsCategoria }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="adicionar-categorias-container" class="col-md-6 offset-md-3">
        <h1>
            <ion-icon name="logo-electron"></ion-icon> Adicionar Marca
        </h1>
        <form action="/categorias" method="POST">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="dsCategoria">Nome:</label>
                    <textarea class="form-control" id="dsCategoria" name="dsCategoria"
                        placeholder="Nome da Marca"></textarea>
                </div>
                <input id="botao-cadastrar" type="submit" class="btn btn-primary" value="Cadastrar Marca">
        </form>
    </div>
@endsection
