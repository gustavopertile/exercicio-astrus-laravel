@extends('layouts.main')

@section('title', $produtoImagem->nmProduto)

@section('content')

    <div class="col-md10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-lg-4">
                <img src="/img/produtos/{{ $produtoImagem->nomeDoArquivo }}" class="img-fluid"
                    alt="{{ $produtoImagem->nmProduto }}" />
            </div>
            <div id="info-container" class="col-lg-4">
                <h1>{{ $produtoImagem->nmProduto }} <ion-icon name="rocket-outline"></ion-icon>
                </h1>
                <p class="descricaoProduto">
                    <ion-icon name="flash-outline"></ion-icon>{{ $produtoImagem->dsProduto }}
                </p>
                <p class="whatsTexto">
                    <ion-icon name="logo-electron"></ion-icon>
                    Ficou interessado? Nos chame no WhatsApp para mais
                    informações!
                </p>
                <div class="botao">
                    <button type="button" class="btn btn-success">
                        <ion-icon name="logo-whatsapp"></ion-icon> (54) 9-9999-9999
                    </button>

                </div>
            </div>
        </div>
    </div>

@endsection
