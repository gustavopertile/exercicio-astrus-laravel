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
        $search = request('search');

        if ($search) {
            $produtos = DB::table('produtos')->join('imagems', 'produtos.idProduto', '=', 'imagems.idProduto')->where([
                ['nmProduto', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $produtos = DB::table('produtos')->join('imagems', 'produtos.idProduto', '=', 'imagems.idProduto')->inRandomOrder()->limit(6)->get();
        }

        return view('welcome', [
            'produtos' => $produtos,
            'search' => $search
        ]);
    }

    public function dashboard()
    {
        $produtos = DB::table('produtos')->join('imagems', 'produtos.idProduto', '=', 'imagems.idProduto')->join('categorias', 'produtos.idCategoria', '=', 'categorias.idCategoria')->get();
        $categorias = Categoria::all();
        return view('dashboard', [
            'produtos' => $produtos,
            'categorias' => $categorias
        ]);
    }

    public function cadastrarProduto()
    {
        $produtos = DB::table('produtos')->join('imagems', 'produtos.idProduto', '=', 'imagems.idProduto')->join('categorias', 'produtos.idCategoria', '=', 'categorias.idCategoria')->get();
        $categorias = Categoria::all();
        return view('produtos.cadastrar', [
            'produtos' => $produtos,
            'categorias' => $categorias
        ]);
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
            $imagem->idProduto = $produto->idProduto;

            $imagem->save();
        }


        // var_dump($id);
        return redirect('/produtos')->with('msg', 'Produto cadastrado com sucesso!');
    }

    public function show($idProduto)
    {

        $produtoImagem = DB::table('produtos')->join('imagems', 'produtos.idProduto', '=', 'imagems.idProduto')->where('produtos.idProduto', $idProduto)->first();

        // $produto = Produto::findOrFail($idProduto);

        return view('show', ['produtoImagem' => $produtoImagem]);
    }


    public function categorias()
    {
        $categorias = Categoria::all();
        return view('produtos.categorias', ['categorias' => $categorias]);
    }

    public function addCategoriaPag()
    {
        return view('addcategoria');
    }

    public function adicionarCategoria(Request $request)
    {

        $categoria = new Categoria;

        $categoria->dsCategoria = $request->dsCategoria;

        $categoria->save();

        return redirect('/categorias')->with('msg', 'Marca adicionada com sucesso!');
    }


    public function destroy($idProduto)
    {
        Produto::where([
            ['produtos.idProduto', '=', $idProduto]
        ])->delete();

        $imagemNome = Imagem::where([['imagems.idProduto', '=', $idProduto]])->first()->nomeDoArquivo;

        unlink(public_path('img/produtos' . '/' . $imagemNome));

        Imagem::where([['imagems.idProduto', '=', $idProduto]])->delete();


        return redirect('/produtos')->with('msg', 'Produto excluído com sucesso!');
    }

    public function destroyCategoria($idCategoria)
    {
        Categoria::where([
            ['categorias.idCategoria', '=', $idCategoria]
        ])->delete();

        return redirect('/categorias')->with('msg', 'Marca excluída com sucesso!');
    }

    public function edit($idProduto)
    {
        $produto = DB::table('produtos')->join('imagems', 'produtos.idProduto', '=', 'imagems.idProduto')->join('categorias', 'produtos.idCategoria', '=', 'categorias.idCategoria')->where('produtos.idProduto', $idProduto)->first();

        $categorias = Categoria::all();

        return view('produtos.edit', [
            'produto' => $produto,
            'categorias' => $categorias
        ]);
    }

    public function update(Request $request)
    {
        $imagem = new Imagem;

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {

            $apagarImagemPasta = Imagem::where([['imagems.idProduto', $request->idProduto]])->first()->nomeDoArquivo;

            unlink(public_path('img/produtos' . '/' . $apagarImagemPasta));

            Imagem::where([['imagems.idProduto', '=', $request->idProduto]])->delete();

            $requestImagem = $request->imagem;

            $extensao = $requestImagem->extension();

            $imagemNome = md5($requestImagem->getClientOriginalName() . strtotime("now")) . "." . $extensao;

            $requestImagem->move(public_path('img/produtos'), $imagemNome);


            $imagem->dsImagem = "Foto do " . $request->nmProduto;
            $imagem->nomeDoArquivo = $imagemNome;
            $imagem->idProduto = $request->idProduto;

            $imagem->save();
        }

        $produtoUpdate = Produto::find($request->idProduto);
        $produtoUpdate->nmProduto = $request->nmProduto;
        $produtoUpdate->dsProduto = $request->dsProduto;
        $produtoUpdate->idCategoria = $request->idCategoria;
        $produtoUpdate->update();


        return redirect('/dashboard')->with('msg', 'Produto editado com sucesso!');
    }

    public function editCategoria($idCategoria)
    {
        $categorias = Categoria::where([
            ['categorias.idCategoria', $idCategoria]
        ])->first();

        return view('editcategoria', [
            'categorias' => $categorias
        ]);
    }

    public function updateCategoria(Request $request)
    {

        $categoriaUpdate = Categoria::find($request->idCategoria);
        $categoriaUpdate->dsCategoria = $request->dsCategoria;
        $categoriaUpdate->update();

        return redirect('/dashboard')->with('msg', 'Marca editada com sucesso!');
    }
}
