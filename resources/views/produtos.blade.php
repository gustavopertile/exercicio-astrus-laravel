@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    <div id="produtos-container" class="col-md-12">
        <h2 class="tituloProdutos">
            <ion-icon name="logo-react"></ion-icon> Produtos disponíveis!
        </h2>
        <p class="subtitle-produtos">Corra! Promoções Imperdíveis!</p>
        <div id="cards-container" class="row">
            @foreach ($produtosImagens as $produtoImagem)
                <div class="card col-md-3">
                    <img src="/img/produtos/{{ $produtoImagem->nomeDoArquivo }}" alt="{{ $produtoImagem->nmProduto }}">
                    <div class="card-body text-center">
                        <h5 class="card-title ">{{ $produtoImagem->nmProduto }}</h5>
                        <p class="card-text">{{ $produtoImagem->dsProduto }}</p>
                        <a href="/produtos/{{ $produtoImagem->idProduto }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
