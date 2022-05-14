<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    //
    function cadastro_novo(){
        return view('novo_cliente');
    }

    function novo(Request $req){
        $nome = $req->input('nome');
        $telefone = $req->input('telefone');
        $renda = $req->input('renda');

        $cliente = new Cliente();
        $cliente->nome = $nome;
        $cliente->telefone = $telefone;
        $cliente->renda = $renda;

        $cliente->save();

        return redirect()->route('clientes_listar');
    }

    function listar(){
        $clientes = Cliente::all();

        return view('lista_cliente', ['clientes' => $clientes]);
    }

    function alterar($id){
        $cliente = Cliente::findOrFail($id);

        return view('altera_cliente', ['cliente' => $cliente]);
    }

    function salvar(Request $req){
        $id = $req->input('id');
        $nome = $req->input('nome');
        $telefone = $req->input('telefone');
        $renda = $req->input('renda');

        $cliente = Cliente::findOrFail($id);
        $cliente->nome = $nome;
        $cliente->telefone = $telefone;
        $cliente->renda = $renda;

        $cliente->save();

        return redirect()->route('clientes_listar');
    }

    function excluir($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return redirect()->route('clientes_listar');
    }
}
