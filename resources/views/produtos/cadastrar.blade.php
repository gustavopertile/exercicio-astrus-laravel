@extends('layouts.main')

@section('title', 'Cadastrar Produto')

@section('content')

    <div id="cadastrar-produtos-container" class="col-md-6 offset-md-3">
        <h1>
            <ion-icon name="logo-electron"></ion-icon> Cadastre o Produto
        </h1>
        <form action="/produtos" method="POST">
            @csrf
            <div class="form-group">
                <label for="nmProduto">Produto:</label>
                <input type="text" class="form-control" id="nmProduto" name="nmProduto" placeholder="Modelo do celular">
            </div>
            <div class="form-group">
                <label for="dsProduto">Descrição:</label>
                <textarea class="form-control" id="dsProduto" name="dsProduto"
                    placeholder="Descrição das condições do celular"></textarea>
            </div>
            <div class="form-group">
                <label for="idCategoria">Marca:</label>
                <select type="text" class="form-control" id="idCategoria" name="idCategoria">
                    @foreach ($categorias as $categoria)
                        <option value={{ $categoria->idCategoria }}>{{ $categoria->dsCategoria }}</option>
                    @endforeach
                </select>
            </div>
            <input id="botao-cadastrar" type="submit" class="btn btn-primary" value="Cadastrar Produto">
        </form>
    </div>

@endsection
