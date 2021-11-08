@extends('layouts.main')

@section('titulo', 'Mostrar fornecedor')

@section('conteudo')
    <div id="form">
        <h1> Mostrar fornecedor</h1>
            @foreach ($fornecedor as $fornecedor)
            <ul>
                <li> nome do fornecedor: {{$fornecedor->nome}};</li>
                <li> CNPJ do fornecedor {{$fornecedor->CNPJ}}</li>
                <li> email  {{$fornecedor->email}}</li>
            </ul>
            @endforeach
    </div>
@endsection('conteudo')