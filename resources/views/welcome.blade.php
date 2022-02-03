@extends('layouts.main')

@section('title', 'Technology Center')

@section('content')
    <link rel="stylesheet" href="../../public/css/style.css">

    <div id="search-container" class="col-md-12">
        <h1>Busque um produto</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="produtos-container" class="col-md-12">
        <h2>
            <ion-icon name="logo-react"></ion-icon> Produtos Disponíveis!
        </h2>
        <p class="subtitle">Corra antes que alguém compre antes que você!</p>
        <div id="cards-container" class="row">
            @foreach ($produtos as $produto)
                <div class="card col-md-3">
                    <img class="apple_foto" src="/img/iphone11.jpeg" alt="Apple">
                    <div class="card-body text-center">
                        <h5 class="card-title ">{{ $produto->nmProduto }}</h5>
                        <p class="card-text">{{ $produto->dsProduto }}</p>
                        {{-- <p class="card-text alert-success">R$1299,99</p> --}}
                        <a href="/" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- <div>
        @foreach ($categorias as $categoria)
            <p>{{ $categoria->idCategoria }} -- {{ $categoria->dsCategoria }}</p>
        @endforeach
    </div>

    <div>
        @foreach ($imagens as $imagem)
            <p>{{ $imagem->idImagem }} -- {{ $imagem->dsImagem }}</p>
            <p>{{ $imagem->nomeDoArquivo }} -- {{ $imagem->idProduto }}</p>
        @endforeach
    </div> --}}
@endsection
