@extends('layouts.main')

@section('titulo', 'Mostrar entrada')

@section('conteudo')
    <div id="form">
        <h1> Mostrar entrada</h1>
        @foreach ($entrada as $entrada)
        <ul>
             <li> Data da entrada: {{$entrada->data_entrada}};</li>
            <li> data da Saida{{$entrada->data_saida}}</li>
        </ul>
        @endforeach
    </div>
@endsection('conteudo')
