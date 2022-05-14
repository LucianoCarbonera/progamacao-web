@extends('template')

@section('titulo')
Cadastro Novo Fornecedor
@endsection

@section('conteudo')
<h1>Cadastro de fornecedor</h1>
<div class="form-control">
    <form method="post" action="{{ route('fornecedores_novo') }}">
        @csrf
        <label class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" >

        <label class="form-label">Endereço</label>
        <input type="text" name="endereco" class="form-control">

        <label>CEP</label>
        <input type="number" maxlength="8" id="CEP" name="CEP" class="form-control">

        <label>Estado</label>
        <select class="form-select " name="estado">
                <option value="">--- Selecione o estado ---</option>
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>

                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>

                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
        </select><br>    
        
        <label>Cidade</label>
        <input type="text" name="cidade" class="form-control">
        
        <br>
        <div class="text-center">
            <button class="btn btn-primary" type="submit">Enviar</button>

        </div>
           
    </form>
</div>



@endsection