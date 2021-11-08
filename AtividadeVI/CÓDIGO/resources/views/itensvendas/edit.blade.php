@extends('layouts.main')

@section('titulo', 'Edição de itens vendas')

@section('conteudo')
    <form action="{{route('ItensVendas.update', ['id' => $ItensVendas->id])}}" method="post">      
        @csrf
        @method('PUT')
        <label for="">Quantidade </label>
        <input type="text" name="quantidade" id="quantidade" value="{{$ItensVendas->quantidade}}">
        <label for="">Valor Unitario</label>
        <input type="text" name="valor_unitario" id="valor_unitario" value="{{$ItensVendas->valor_unitario}}">
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
