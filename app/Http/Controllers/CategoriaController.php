<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Str;

class CategoriaController extends Controller
{
    function cadastro(){
        return view('categorias_nova');
    }

    function novo(Request $req){
        $categoria = new Categoria();
        $categoria->nome = $req->input('nome');
        $categoria->save();


        return redirect('categorias/nova');
        //$produtos = Produto::all();
        //return view('lista_produtos', ['produtos' => $produtos]);

        //dd($produto, $req);

    }
}
