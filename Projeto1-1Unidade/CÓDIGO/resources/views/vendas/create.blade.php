@extends('layouts.main')

@section('titulo', 'Cadastro de vendas')

@section('conteudo')
    <div id="form">
    
    <form action="{{route('vendas.create')}}" method="post">  
        @csrf
        <label for="">Valor total da venda</label>
        <input type="text"  class="teste @error('valor_total') is-invalid  @enderror" name="valor_total" id="valor_total" value="{{ old('valor_total')}">
            @error('valor_total')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Valor do troco</label>
        <input type="text" class="teste @error('valor_troco') is-invalid  @enderror" name="valor_troco" id="valor_troco" value="{{ old('valor_troco')}">
            @error('valor_troco')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Desconto</label>
        <input type="text" class="teste @error('desconto') is-invalid  @enderror" name="desconto" id="desconto" value="{{ old('desconto')}">
            @error('desconto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="cadastrar">
    </form>
    </div>
    <table class="table">
      <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Valor total da venda</th>
                <th scope="col">Valor do troco</th>
                <th scope="col">Desconto</th>
            </tr>
        </thead>
    </table>
@endsection('conteudo')




