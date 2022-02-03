@extends('layouts.main')

@section('title', 'Categorias')

@section('content')
    <h1>
        <ion-icon name="logo-electron"></ion-icon>Categorias
    </h1>

    <div>
        @foreach ($categorias as $categoria)
            <p>{{ $categoria->idCategoria }} -- {{ $categoria->dsCategoria }}</p>
        @endforeach
    </div>
@endsection
