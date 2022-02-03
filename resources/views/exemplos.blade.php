@extends('layouts.main')

@section('title', 'Technology Center')

@section('content')
    <link rel="stylesheet" href="../../public/css/style.css">
    <img class="apple_foto" src="/img/lojacelular.jpeg" alt="Apple">
    @if (10 > 5)
        <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if ($nome == 'Gustavo')
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e trabalha como {{ $profissao }}</p>
    @else
        <p>O nome não é Pedro</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }}</p>
        @if ($i == 2)
            <p>O i é 2</p>
        @endif
    @endfor

    @foreach ($nomes as $nome)
        <p>{{ $loop->index }}</p>
        <p>{{ $nome }}</p>
    @endforeach

    @php
    $name = 'João';
    echo $name;
    @endphp

    <!-- Comentário do HTML aparece no inspecionar elemento -->
    {{-- Este é o comentário do Blade --}}
@endsection
