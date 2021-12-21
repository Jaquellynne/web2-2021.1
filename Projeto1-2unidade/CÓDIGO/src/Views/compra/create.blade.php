@extends('layouts.main')

@section('titulo', 'Efetuar compra')

@section('conteudo')
    <div id="form">
  
     <form action="{{route('compras.create')}}" method="post">  
        @csrf
        <label for="">Quantidade</label>
        <input type="text"  class="teste @error('quantidade') is-invalid  @enderror"  name="quantidade" id="quantidade" value="{{ old('quantidade')}}">
            @error('quantidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Valor total</label>
        <input type="text"  class="teste @error('valor_total') is-invalid  @enderror" name="valor_total" id="valor_total" value="{{ old('valor_total')}">
            @error('valor_total')
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
                        <td>Valor total</td>
                        <td>Nota Fiscal</td>
                        <td>Fornecedor</td>
                        <td>Data de compra</td>
                        <td>Mais informações</td>
                    </tr>
                </thead>
            </table>
    </div>

@endsection('conteudo')


