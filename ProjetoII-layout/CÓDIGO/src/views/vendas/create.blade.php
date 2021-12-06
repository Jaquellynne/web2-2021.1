@extends('layouts.main')

@section('titulo', 'Cadastro de vendas')

@section('conteudo')
    <div id="form">
        <form action="{{route('vendas.create')}}" method="post">  
             @csrf
            <label for="">Quantidade</label>
             <input type="text" class="teste @error('quantidade') is-invalid  @enderror" name="quantidade" id="quantidade" value="{{ old('quantidade')}}">
              @error('quantidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
              @enderror
            <label for="">Valor</label>
            <input type="text" class="teste @error('valor') is-invalid  @enderror" name="valor" id="valor" value="{{ old('valor')}}">
            @error('valor')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <label for="">Data da venda</label>
            <input type="text" class="teste @error('data_venda') is-invalid  @enderror" name="data_venda" id="data_venda" value="{{ old('data_venda')}}">
            @error('data_venda')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <input type="submit" value="Cadastrar">
            <input type="submit" value="Cancelar">
        </form>
    </div>
    <div class="content">
            <table class="table">
                <thead>
                    <tr>
                            <td>ID</td>
                            <td>Quantidade de itens</td>
                            <td>Valor</td>
                            <td>Cliente</td>
                            <td>Forma de pagamento</td>
                            <td>Data de venda</td>
                            <td>Mais informações</td>
                    </tr>
                </thead>
            </table>
    </div>

@endsection('conteudo')



