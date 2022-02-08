@extends('layouts.main')

@section('title', 'Marcas')

@section('content')
    <div class="col-md-4 offset-md-4 categorias-container">
        <h1>
            <ion-icon name="logo-ionitron"></ion-icon> Marcas Disponíveis
        </h1>
        <table class="table table-light">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="icone-tabela">
                        <ion-icon name="server-outline"></ion-icon>
                    </th>
                    <th class="col-5">Nome</th>
                    <th class="col-2">ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td class="col-7">{{ $categoria->dsCategoria }}</td>
                        <td>{{ $categoria->idCategoria }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
