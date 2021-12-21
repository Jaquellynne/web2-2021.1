@extends('layouts.main')

@section('titulo', 'Mostrar compras')

@section('conteudo')
    <div id="form">
        <h1> Mostrar compras</h1>
        @foreach ($compras as $compras)
        <ul>
            <li> Quantidade: {{$compras->quantidade}};</li>
            <li> Valor total: {{$compras->valor_total}}</li>
        </ul>
        @endforeach
    </div>
@endsection('conteudo')
