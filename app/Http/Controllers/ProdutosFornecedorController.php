<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosFornecedorController extends Controller
{
    function listar($id=null){
        $produtos = Produto::where('fornecedor',$id)->get();
        //dd($produtos);
        return view('lista_produtos_fornecedor', ['produtos' => $produtos]);
    }
}
