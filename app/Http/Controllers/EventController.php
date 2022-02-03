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
        $categorias = Categoria::all();
        return view('produtos.cadastrar', ['categorias' => $categorias]);
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


    public function store(Request $request)
    {

        $produto = new Produto;

        $produto->nmProduto = $request->nmProduto;
        $produto->dsProduto = $request->dsProduto;
        $produto->idCategoria = $request->idCategoria;

        $produto->save();

        return redirect('/')->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function adicionarCategoria(Request $request)
    {

        $categoria = new Categoria;

        $categoria->dsCategoria = $request->dsCategoria;

        $categoria->save();

        return redirect('/categorias')->with('msg', 'Marca adicionada com sucesso!');
    }
}
