@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    <h1>
        <ion-icon name="logo-electron"></ion-icon>Tela de produtos
    </h1>

    <div>
        @foreach ($produtos as $produto)
            <p>{{ $produto->nmProduto }} -- {{ $produto->dsProduto }}</p>
        @endforeach
    </div>

    <div>
        @foreach ($imagens as $imagem)
            <p>{{ $imagem->idImagem }} -- {{ $imagem->dsImagem }}</p>
            <p>{{ $imagem->nomeDoArquivo }} -- {{ $imagem->idProduto }}</p>
        @endforeach
    </div>
@endsection
