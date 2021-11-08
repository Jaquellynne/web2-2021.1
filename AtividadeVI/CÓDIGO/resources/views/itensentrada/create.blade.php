@extends('layouts.main')

@section('titulo', 'Cadastro de itens entrada')
 
@section('conteudo')
    <div id="form">
        <form action="{{route('itensentrada.create')}}" method="post">         
            @csrf
            <label for="">Nome itens entrada</label>
            <input type="text" name="nome_itens_entrada" id="nome_itens_entrada">
            <label for="">Descricao</label>
            <input type="text" name="descricao" id="descricao">
            <input type="submit" value="cadastrar">
        </form>
    </div>
@endsection('conteudo')




