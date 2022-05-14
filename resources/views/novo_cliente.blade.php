@extends('template')

@section('titulo')
Cliente - Novo
@endsection

@section('conteudo')
<h1>Novo cliente</h1>
<form method="post" action="{{ route('clientes_novo') }}">
    @csrf
    <label>Nome</label>
    <input type="text" name="nome"><br>
    <label>Telefone</label>
    <input type="text" name="telefone"><br>
    <label>Renda</label>
    <input type="text" name="renda"><br>

    <input type="submit" value="Enviar">
</form>
@endsection