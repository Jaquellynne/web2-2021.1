@extends('layouts.main')

@section('titulo', 'Cadastro de fornecedor')

@section('conteudo')
    <div id="form">
        <form action="{{route('fornecedor.create')}}" method="post"> 
            @csrf
            <label for="">Nome Fornecedor</label>
            <input type="text" name="nome" id="nome">
            <label for="">CNPJ</label>
            <input type="text" name="cnpj" id="cnpj">
            <label for="">Email</label>
            <input type="text" name="email" id="email">
            <input type="submit" value="cadastrar">
        </form>
    </div>
@endsection('conteudo')




