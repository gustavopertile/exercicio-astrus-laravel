<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Imagem;

class EventController extends Controller
{
    public function index()
    {

        $produtos = Produto::all();
        $categorias = Categoria::all();
        $imagens = Imagem::all();

        return view('welcome', [
            'produtos' => $produtos,
            'categorias' => $categorias,
            'imagens' => $imagens
        ]);
    }

    public function cadastrar()
    {
        return view('produtos.cadastrar');
    }

    public function produtos()
    {
        $produtos = Produto::all();
        $imagens = Imagem::all();

        return view('produtos', [
            'produtos' => $produtos,
            'imagens' => $imagens
        ]);
    }

    public function categorias()
    {
        $categorias = Categoria::all();
        return view('produtos.categorias', ['categorias' => $categorias]);
    }
}
