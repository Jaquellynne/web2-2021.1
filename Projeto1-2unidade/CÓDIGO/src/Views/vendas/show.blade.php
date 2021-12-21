@extends('layouts.main')

@section('titulo', 'Mostrar vendas')

@section('conteudo')
    <div id="form">
        <h1> Mostrar vendas</h1>
        @foreach ($vendas as $vendas)
        <ul>
            <li> Quantidade: {{$vendas->quantidade}};</li>
            <li> Valor {{$vendas->valor}}</li>
            <li>Data da Venda {{$vendas->data_venda</li>
        </ul>
        @endforeach
    </div>
@endsection('conteudo')
