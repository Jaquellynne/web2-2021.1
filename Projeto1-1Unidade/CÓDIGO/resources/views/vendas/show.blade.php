@extends('layouts.main')

@section('titulo', 'Mostrar vendas')

@section('conteudo')
    <div id="form">
        <h1> Mostrar vendas</h1>
        @foreach ($vendas as $vendas)
        <ul>
            <li> Valor total da venda: {{$vendas->valor_total}};</li>
            <li> Valor do troco da venda {{$vendas->valor_troco}}</li>
            <li> Desconto  {{$vendas->desconto}}</li>
        </ul>
        @endforeach
    </div>
@endsection('conteudo')