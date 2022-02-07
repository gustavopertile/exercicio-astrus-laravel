@extends('layouts.main')

@section('title', 'Editando: ' . $produto->nmProduto)

{{-- <?php
dump($produtos);
die();
?> --}}

@section('content')

    <div id="cadastrar-produtos-container" class="col-md-6 offset-md-3">
        <h1>
            <ion-icon name="logo-electron"></ion-icon> Editando: {{ $produto->nmProduto }}
        </h1>

        <form action="/produtos/update/{{ $produto->idProduto }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <img src="/img/produtos/{{ $produto->nomeDoArquivo }}" alt="{{ $produto->nmProduto }}"
                class="img-preview">
            <div class="form-group">
                <label for="imagem">Imagem do Produto:</label>
                <input class="form-control" type="file" id="imagem" name="imagem">
            </div>
            <div class="form-group">
                <label for="nmProduto">Produto:</label>
                <input type="text" class="form-control" id="nmProduto" name="nmProduto" placeholder="Modelo do celular"
                    value="{{ $produto->nmProduto }}">
            </div>
            <div class="form-group">
                <label for="dsProduto">Descrição:</label>
                <textarea class="form-control" id="dsProduto" name="dsProduto"
                    placeholder="Descrição das condições do celular">{{ $produto->dsProduto }}</textarea>
            </div>
            <div class="  form-group">
                <label for="idCategoria">Marca:</label>
                <select type="text" class="form-control" id="idCategoria" name="idCategoria"
                    value="{{ $produto->dsCategoria }}">
                    @foreach ($categorias as $categoria)
                        <option @php
                            if ($produto->idCategoria == $categoria->idCategoria) {
                                echo 'selected';
                            }
                        @endphp value={{ $categoria->idCategoria }}>{{ $categoria->dsCategoria }}
                        </option>
                    @endforeach
                </select>
            </div>
            <input id="botao-cadastrar" type="submit" class="btn btn-primary" value="Editar Produto">
        </form>
    </div>

@endsection
