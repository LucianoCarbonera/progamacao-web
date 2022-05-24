@extends('template')

@section('titulo')
Produto - Novo
@endsection

@section('conteudo')
<form action="{{ route('produtos_salvar') }}" method="post" >
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome"><br>
    <label for="categoria">Categoria
    <select name="categoria" class="form-select">
                                    @foreach($categorias as $e)

                                    <option value="{{$e->id}}">{{$e->nome}}</option>

                                    @endforeach

                                </select>

    </label><br>
    
    <label for="valor">Preço unitário</label>
    <input type="number" name="preco" id="preco"><br>
    <input type="submit">
</form>
@endsection