@extends('layouts.main')

@section('titulo', 'Mostrar clientes')

@section('conteudo')
    <div id="form">
        <h1> Mostrar clientes</h1>
        @foreach ($clientes as $cliente)
        <ul>
            <li> Nome do cliente: {{$cliente->nome}};</li>
            <li> CPF: {{$cliente->cpf}}</li>
        </ul>
        @endforeach
    </div>
@endsection('conteudo')
