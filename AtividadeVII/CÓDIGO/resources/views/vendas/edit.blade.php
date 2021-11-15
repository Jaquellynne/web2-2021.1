@extends('layouts.main')

@section('titulo', 'Edição de vendas')

@section('conteudo')
    <form action="{{route('vendas.update', ['id' => $vendas->id])}}" method="post">       
        @csrf
        @method('PUT')
        <label for="">Valor total da venda </label>
        <input type="text" name="valor_total" id="valor_total" value="{{$vendas->valor_total}}">
        <label for="">Valor do troco</label>
        <input type="text" name="valor_troco" id="valor_troco" value="{{$vendas->valor_troco}}">
        <label for="">Desconto</label>
        <input type="text" name="desconto" id="desconto" value="{{$vendas->desconto}}">
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
