@extends('layouts.main')

@section('titulo', 'Cadastro de entrada')

@section('conteudo')
    <div id="form">
        <form action="{{route('entrada.create')}}" method="post">  
             @csrf
            <label for="">Data da entrada</label>
            <input type="text" name="data_entrada" id="data_entrada">
            <label for="">Data da saida</label>
            <input type="text" name="data_saida" id="data_saida">
            <input type="submit" value="cadastrar">
        </form>
    </div>

@endsection('conteudo')   



