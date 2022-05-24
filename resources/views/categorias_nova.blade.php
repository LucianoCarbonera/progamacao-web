@extends('template')

@section('titulo')
Categoria - Nova
@endsection

@section('conteudo')
<form action="{{ route('categorias_salvar') }}" method="post" >
    @csrf
    <label for="nome">Nome Categoria</label>
    <input type="text" name="nome" id="nome"><br>
    
    <input type="submit">
</form>
@endsection