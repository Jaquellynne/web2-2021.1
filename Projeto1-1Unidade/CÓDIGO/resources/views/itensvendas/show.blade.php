@extends('layouts.main')

@section('titulo', 'Mostrar itens vendas ')

@section('conteudo')
    <div id="form">
        <h1> Mostrar itens vendas</h1>
        @foreach ($ItensVendas as $ItensVendas)
    <ul>
        <li> Quantidade: {{$ItensVendas->quantidade}};</li>
        <li> Valor Unitario {{$ItensVendas->valor_unitario}}</li>
   
    </ul>
    @endforeach
    </div>
@endsection('conteudo')