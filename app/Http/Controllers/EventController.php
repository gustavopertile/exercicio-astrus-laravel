<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {

        $nome = "Gustavo";
        $idade = 20;

        $arr = [1, 2, 3, 4, 5];

        $nomes = ["Matheus", "Maria", "João", "Saulo"];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => 'Programador',
                'arr' => $arr,
                'nomes' => $nomes
            ]
        );
    }

    public function cadastrar()
    {
        return view('produtos.cadastrar');
    }

    public function produtos()
    {
        $busca = request('search');
        return view('produtos', ['busca' => $busca]);
    }
}
