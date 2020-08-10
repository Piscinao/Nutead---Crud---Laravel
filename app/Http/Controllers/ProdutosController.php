<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//inclusão a model dentro do controller
use App\Produto;

class ProdutosController extends Controller
{
    public function formularioCriacao()
    {
        return view('produtos.formulario_criacao');
    }

    public function registrarProduto(Request $request)
    {
       // dd($request->all()); //debug die
       $produto = Produto::create([
        'nome' => $request->nome,
        'custo' => $request->custo,
        'preco'=> $request->preco,
        'quantidade'=> $request->quantidade,

       ]);

       return "Produto $produto->nome criado com sucesso!";

    }
}
