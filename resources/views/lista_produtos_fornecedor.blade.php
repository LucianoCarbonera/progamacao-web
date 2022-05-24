@foreach($produtos as $produto)
<div>
    Nome: {{ $produto->nome }}
    Categoria: {{ $produto->categoria }}
    Preco: {{ $produto->preco }}
    Fornecedor: {{ $produto->fornecedor }}
    

    <a href="{{ route('produtos_listar') }}">
    </a>
</div>
@endforeach