@extends('template')

@section('conteudo')
@routes
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>CEP</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Operações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($fornecedores as $c)
    <tr>
        <td>{{ $c->id }}</td>
        <td>{{ $c->nome }}</td>
        <td>{{ $c->endereco }}</td>
        <td>{{ $c->CEP }}</td>
        <td>{{ $c->cidade }}</td>
        <td>{{ $c->estado }}</td>
        <td>
            <a href="{{ route('fornecedores_excluir', ['id' => $c->id]) }}" onclick="excluir({{ $c->id }})" class="btn btn-danger">Excluir</a>
            <a href="{{ route('fornecedores_alterar', ['id' => $c->id]) }}" class="btn btn-dark">Alterar</a>
            <a href="{{ route('produtos_listar_forn', ['id' => $c->id]) }}" class="btn btn-primary">Listar Produtos</a>
        </td>
    </tr>
    @endforeach

    <a href="{{ route('fornecedores_novo') }}" class="btn btn-primary">Novo Fornecedor</a>
    

    </tbody>
</table>

<script>
    function excluir(id){
        if (confirm(`Deseja realmente excluir o fornecedor ${id}?`)){
            location.href = route('fornecedores_excluir', {'id':id});
        }
    }
</script>
@endsection
