@extends('layouts.main')

@section('titulo', 'Cadastro de vendas')

@section('conteudo')
    <div id="form">
    <form action="{{route('vendas.create')}}" method="post">  
        @csrf
        <label for="">Valor total da venda</label>
        <input type="text" name="valor_total" id="valor_total">
        <label for="">Valor do troco</label>
        <input type="text" name="valor_troco" id="valor_troco">
        <label for="">Desconto</label>
        <input type="text" name="desconto" id="desconto">
        <input type="submit" value="cadastrar">
    </form>
    </div>
@endsection('conteudo')




