<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Fornecedor;
use Illuminate\Support\Str;

class ProdutosController extends Controller
{
    function cadastro(){
        $fornecedores = Fornecedor::all();
        $categorias = Categoria::all();
        return view('produto_novo', [
                    'categorias' => $categorias,
                    'fornecedores' => $fornecedores]);
    }

    function listar(){
        $produtos = Produto::all();
        return view('lista_produtos', ['produtos' => $produtos]);
    }

    function novo(Request $req){
        $produto = new Produto();
        $produto->nome = $req->input('nome');
        $produto->preco = $req->input('preco');
        $produto->categoria = $req->input('categoria');
        $produto->fornecedor = $req->input('fornecedor');
        
        $produto->save();


        return redirect('produtos/listar');
        //$produtos = Produto::all();
        //return view('lista_produtos', ['produtos' => $produtos]);

        //dd($produto, $req);

    }
}
