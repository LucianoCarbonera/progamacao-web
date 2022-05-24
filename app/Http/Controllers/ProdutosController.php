<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Str;

class ProdutosController extends Controller
{
    function cadastro(){
        $categorias = Categoria::all();
        return view('produto_novo', ['categorias' => $categorias] );
    }

    function listar(){
        $produtos = Produto::all();
        return view('lista_produtos', ['produtos' => $produtos]);
    }

    function novo(Request $req){
        $produto = new Produto();
        $produto->nome = $req->input('nome');
        $produto->categoria = $req->input('categoria');
        $produto->preco = $req->input('preco');
        $produto->save();


        return redirect('produtos/listar');
        //$produtos = Produto::all();
        //return view('lista_produtos', ['produtos' => $produtos]);

        //dd($produto, $req);

    }
}
