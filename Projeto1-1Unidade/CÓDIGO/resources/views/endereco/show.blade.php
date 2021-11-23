@extends('layouts.main')

@section('titulo', 'Mostrar endereco')

@section('conteudo')

    <div id="form">
        <h1> Mostrar endereco</h1>
        @foreach ($endereco as $endereco)
        <ul>
            <li> nome do logradouro: {{$endereco->logradouro}};</li>
            <li> bairro {{$endereco->bairro}}</li>
            <li> cidade  {{$endereco->cidade}}</li>
            <li> uf  {{$endereco->uf}}</li>
        </ul>
         @endforeach
    </div>
@endsection('conteudo')

