@extends('layouts.main')

@section('titulo', 'Cadastro de itens vendas')

@section('conteudo')
    <div id="form">
    <form action="{{route('ItensVendas.create')}}" method="post">         
         @csrf
        <label for="">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="">Valor Unitario</label>
        <input type="text" name="valor_unitario" id="valor_unitario">
        <input type="submit" value="cadastrar">
    </form>
    </div>
@endsection('conteudo')




