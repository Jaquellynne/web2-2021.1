@extends('layouts.main')

@section('titulo', 'Mostrar clientes')

@section('conteudo')
    <div id="form">
        <h1> Mostrar clientes</h1>
        @foreach ($clientes as $cliente)
        <ul>
            <li> nome do cliente: {{$cliente->nome}};</li>
            <li> debito do cliente {{$cliente->debito}}</li>
            <li> descricao  {{$cliente->descricao}}</li>
        </ul>
        @endforeach
    </div>
@endsection('conteudo')
