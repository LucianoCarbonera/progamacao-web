@foreach($produtos as $produto)
<div>
    Nome: {{ $produto->nome }}
    Categoria: {{ $produto->categoria }}
    Fornecedor: {{ $produto->fornecedor }}
    Preco: {{ $produto->preco }}
    

    <a href="{{ route('produtos_listar') }}">
    </a>
</div>
@endforeach