@extends('layouts.main')

@section('titulo', 'Cadastro de itens vendas')

@section('conteudo')
    <div id="form">
    
    <form action="{{route('ItensVendas.create')}}" method="post">         
         @csrf
        <label for="">Quantidade</label>
        <input type="text" class="teste @error('quantidade') is-invalid  @enderror" name="quantidade" id="quantidade" value="{{ old('quantidade')}}">
          @error('nome')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
          @enderror
        <label for="">Valor Unitario</label>
        <input type="text" class="teste @error('valor_unitario') is-invalid  @enderror" name="valor_unitario" id="valor_unitario" value="{{ old('valor_unitario')}}">
           @error('valor_unitario')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
          @enderror
        <input type="submit" value="cadastrar">
    </form>
    </div>
@endsection('conteudo')




