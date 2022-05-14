@extends('template')

@section('titulo')
Alterar fornecedor - #{{ $fornecedor->id }}
@endsection

@section('conteudo')
<h1>Alterar Fornecedor - #{{ $fornecedor->id }}</h1>
<form method="post" action="{{ route('fornecedores_salvar') }}">
    @csrf
    <input type="hidden" name="id" value="{{ $fornecedor->id }}">
    <label>Nome</label>
    <input type="text" name="nome" value="{{ $fornecedor->nome }}"><br>
    <label>Endereço</label>
    <input type="text" name="endereco" value="{{ $fornecedor->endereco }}"><br>
    <label>CEP</label>
    <input type="number" max="10" name="CEP"value="{{ $fornecedor->CEP }}" minlength="3"><br>
    <label>Cidade</label>
    <input type="text" name="cidade"value="{{ $fornecedor->cidade }}"><br>
    <label>Estado</label>
    <input type="text" name="estado"value="{{ $fornecedor->estado }}"><br>

    <input type="submit" value="Enviar">
</form>
@endsection