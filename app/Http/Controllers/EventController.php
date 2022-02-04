<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Imagem;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index()
    {

        $produtos = Produto::all();
        $categorias = Categoria::all();
        $imagens = Imagem::all();

        $produtosImagens = DB::table('produtos')->join('imagems', 'produtos.idProduto', '=', 'imagems.idProduto')->get();

        $novidades = DB::table('produtos')->join('imagems', 'produtos.idProduto', '=', 'imagems.idProduto')->inRandomOrder()->limit(6)->get();

        return view('welcome', [
            'produtos' => $produtos,
            'categorias' => $categorias,
            'imagens' => $imagens,
            'produtosImagens' => $produtosImagens,
            'novidades' => $novidades
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

        $produtosImagens = DB::table('produtos')->join('imagems', 'produtos.idProduto', '=', 'imagems.idProduto')->get();

        return view('produtos', [
            'produtos' => $produtos,
            'imagens' => $imagens,
            'produtosImagens' => $produtosImagens
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

        // Upload de Imagem

        $imagem = new Imagem;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            $requestImagem = $request->imagem;

            $extensao = $requestImagem->extension();

            $imagemNome = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extensao;

            $requestImagem->move(public_path('img/produtos'), $imagemNome);

            $imagem->dsImagem = "Foto do " . $request->nmProduto;
            $imagem->nomeDoArquivo = $imagemNome;
            $imagem->idProduto = $produto->id;

            $imagem->save();
        }


        // var_dump($id);
        return redirect('/')->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function adicionarCategoria(Request $request)
    {

        $categoria = new Categoria;

        $categoria->dsCategoria = $request->dsCategoria;

        $categoria->save();

        return redirect('/categorias')->with('msg', 'Marca adicionada com sucesso!');
    }

    public function show($idProduto)
    {

        $produtoImagem = DB::table('produtos')->join('imagems', 'produtos.idProduto', '=', 'imagems.idProduto')->where('produtos.idProduto', $idProduto)->first();

        // $produto = Produto::findOrFail($idProduto);

        return view('show', ['produtoImagem' => $produtoImagem]);
    }
}
