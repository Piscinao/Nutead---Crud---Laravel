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

    public function verProduto($id)
    {
        $produto = Produto::findOrFail($id);

        return view('produtos.visualizacao', ['produto' => $produto]);
    }

    public function editarProduto($id)
    {
        $produto = Produto::findOrFail($id);

        return view('produtos.editar_produto', ['produto' => $produto]);
    }

    public function salvarEdicao(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto -> update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco'=> $request->preco,
            'quantidade'=> $request->quantidade,

        ]);

        return "Produto $produto->id atualizado com sucesso!";
    }
}
