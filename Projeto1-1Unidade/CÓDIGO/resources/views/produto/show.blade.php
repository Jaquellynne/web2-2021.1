@extends('layouts.main')

@section('titulo', 'Mostrar produtos')

@section('conteudo')
    <div id="form">
        <h1> Mostrar produtos</h1>
        @foreach ($produto as $produto)
        <ul>
            <li> nome do produto: {{$produto->nome}};</li>
            <li> Tipo {{$produto->tipo}}</li>
        </ul>
        @endforeach
    </div>
@endsection('conteudo')
