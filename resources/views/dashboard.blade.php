@extends('layouts.main')

@section('title', 'Dashboard')

{{-- <?php
dump($produtos);
die();
?> --}}

@section('content')


    <div class="col-md-6 offset-md-3 dashboard-produtos-container">
        <h1>
            <ion-icon name="logo-react"></ion-icon> Dashboard
        </h1>
        <h2>
            <ion-icon name="cube-outline"></ion-icon> Produtos
        </h2>
        <a href="/cadastrar-produto" class="nav-link btn btn-primary cadastro">Novo Produto</a>
        <table class="table table-light">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="icone-tabela">
                        <ion-icon name="server-outline"></ion-icon>
                    </th>
                    <th scope="col">Nome</th>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/produtos/{{ $produto->idProduto }}"
                                class="nav-link">{{ $produto->nmProduto }}</a></td>
                        <td>{{ $produto->idProduto }}</td>
                        <td>{{ $produto->dsProduto }}</td>
                        <td>{{ $produto->dsCategoria }}</td>
                        <td>
                            <a href="/produtos/edit/{{ $produto->idProduto }}" class="btn btn-info edit-btn">
                                <ion-icon name="create-outline"></ion-icon>Editar
                            </a>
                            <form action="/produtos/{{ $produto->idProduto }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">
                                    <ion-icon name="trash-outline"></ion-icon>Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <div class="col-md-6 offset-md-3 dashboard-categorias-container">
        <h2>
            <ion-icon name="logo-ionitron"></ion-icon> Marcas
        </h2>
        <a href="/categorias/cadastrar" class="nav-link btn btn-primary cadastro">Nova Marca</a>
        <table class="table table-light">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="icone-tabela">
                        <ion-icon name="server-outline"></ion-icon>
                    </th>
                    <th class="col-7">Nome</th>
                    <th class="col-2">ID</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td class="col-7">{{ $categoria->dsCategoria }}</td>
                        <td>{{ $categoria->idCategoria }}</td>
                        <td>
                            <a href="/categorias/edit/{{ $categoria->idCategoria }}" class="btn btn-info edit-btn">
                                <ion-icon name="create-outline"></ion-icon>Editar
                            </a>
                            <form action="/categorias/{{ $categoria->idCategoria }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">
                                    <ion-icon name="trash-outline"></ion-icon>Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection
