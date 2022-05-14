@extends('template')

@section('titulo')
Alterar cliente - #{{ $cliente->id }}
@endsection

@section('conteudo')
<h1>Alterar cliente - #{{ $cliente->id }}</h1>
<form method="post" action="{{ route('clientes_salvar') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $cliente->id }}">
    <label>Nome</label>
    <input type="text" name="nome" value="{{ $cliente->nome }}"><br>
    <label>Telefone</label>
    <input type="text" name="telefone" value="{{ $cliente->telefone }}"><br>
    <label>Renda</label>
    <input type="text" name="renda" value="{{ $cliente->renda }}"><br>

    <input type="submit" value="Enviar">
</form>
@endsection