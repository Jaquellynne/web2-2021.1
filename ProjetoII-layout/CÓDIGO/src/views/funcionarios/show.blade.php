@extends('layouts.main')

@section('titulo', 'Mostrar funcionários')

@section('conteudo')
    <div id="form">
        <h1> Mostrar funcionários</h1>
            @foreach ($funcionario as $funcionario)
            <ul>
                <li> Nome do funcionário: {{$funcionario->nome}};</li>
                <li> CNPJ do funcionário {{$funcionario->cnpj}}</li>
                <li> Email  {{$funcionario->email}}</li>
            </ul>
            @endforeach
    </div>
@endsection('conteudo')