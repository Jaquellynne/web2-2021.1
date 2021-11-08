@extends('layouts.main')

@section('titulo', 'Mostrar itens entrada')

@section('conteudo')
    <div id="form">
        <h1> Mostrar itens entrada</h1>
        @foreach ($itensentrada as $itensentrada)
        <ul>
            <li> Nome itens entrada: {{$itensentrada->nome_itens_entrada}};</li>
             <li> descricao{{$itensentrada->descricao}}</li>
        </ul>
        @endforeach
    </div>
@endsection('conteudo')