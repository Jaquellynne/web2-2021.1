@extends('layouts.main')

@section('titulo', 'Mostrar fornecedores')

@section('conteudo')
    <div id="form">
        <h1> Mostrar fornecedores</h1>
            @foreach ($fornecedor as $fornecedor)
            <ul>
                <li> Nome do fornecedor: {{$fornecedor->nome}};</li>
                <li> CNPJ do fornecedor {{$fornecedor->CNPJ}}</li>
                <li> Email  {{$fornecedor->email}}</li>
            </ul>
            @endforeach
    </div>
@endsection('conteudo')