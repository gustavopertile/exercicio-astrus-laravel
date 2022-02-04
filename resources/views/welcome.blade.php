@extends('layouts.main')

{{-- <?php
dump(count($produtosImagens));
die();
?> --}}

@section('title', 'Technology Center')

@section('content')
    <link rel="stylesheet" href="../../public/css/style.css">

    {{-- <div id="search-container" class="col-md-12">
        <h1>Busque um produto</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="produtos-container" class="col-md-12">
        <h2>
            <ion-icon name="logo-react"></ion-icon> Novidades!
        </h2>
        <p class="subtitle">Celulares que acabaram de chegar!</p>
        <div id="cards-container" class="row">
            @for ($i = count($produtosImagens) - 1; $i >= count($produtosImagens) - 6; $i--)
                <div class="card col-md-3">
                    <img src="/img/produtos/{{ $produtosImagens[$i]->nomeDoArquivo }}"
                        alt="{{ $produtosImagens[$i]->nmProduto }}">
                    <div class="card-body text-center">
                        <h5 class="card-title ">{{ $produtosImagens[$i]->nmProduto }}</h5>
                        <p class="card-text">{{ $produtosImagens[$i]->dsProduto }}</p>
                        <a href="/produtos/{{ $produtosImagens[$i]->idProduto }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endfor
        </div>
    </div> --}}

    <div id="search-container" class="col-md-12">
        <h1>Busque um produto</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    <div id="produtos-container" class="col-md-12">
        <h2>
            <ion-icon name="logo-react"></ion-icon> Novidades!
        </h2>
        <p class="subtitle">Celulares que acabaram de chegar!</p>
        <div id="cards-container" class="row">
            @foreach ($novidades as $novidade)
                <div class="card col-md-3">
                    <img src="/img/produtos/{{ $novidade->nomeDoArquivo }}" alt="{{ $novidade->nmProduto }}">
                    <div class="card-body text-center">
                        <h5 class="card-title ">{{ $novidade->nmProduto }}</h5>
                        <p class="card-text">{{ $novidade->dsProduto }}</p>
                        <a href="/produtos/{{ $novidade->idProduto }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
