@extends('layouts.main')

{{-- <?php
dump(count($produtosImagens));
die();
?> --}}

@section('title', 'Technology Shop')

@section('content')
    <link rel="stylesheet" href="../../public/css/style.css">


    <div id="search-container" class="col-md-12">
        <h1>Busque um produto</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="produtos-container" class="col-md-12">
        @if ($search)
            <h2>
                <ion-icon name="logo-react"></ion-icon> Buscando por: {{ $search }}
            </h2>
        @else
            <h2>
                <ion-icon name="logo-react"></ion-icon> Novidades!
            </h2>
            <p class="subtitle">Celulares que acabaram de chegar!</p>
        @endif
        <div id="cards-container" class="row">
            @foreach ($produtos as $produto)
                <div class="card col-md-3">
                    <img src="/img/produtos/{{ $produto->nomeDoArquivo }}" alt="{{ $produto->nmProduto }}">
                    <div class="card-body text-center">
                        <h5 class="card-title ">{{ $produto->nmProduto }}</h5>
                        <p class="card-text">{{ $produto->dsProduto }}</p>
                        <a href="/produtos/{{ $produto->idProduto }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
            @if (count($produtos) == 0 && $search)
                <p>Não foi possível encontrar nenhum celular com {{ $search }}! <a href='/produtos'> Ver todos</a></p>
            @endif
        </div>
    </div>
@endsection
