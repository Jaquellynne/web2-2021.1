@extends('layouts.main')

@section('titulo', 'Edição de itens entrada')

@section('conteudo')
    <form action="{{route('itensentrada.update', ['id' => $itensentrada->id])}}" method="post">       
        @csrf
        @method('PUT')
        <label for="">Nome dos itens entrada</label>
        <input type="text" name="nome_itens_entrada" id="nome_itens_entrada" value="{{$itensentrada->nome_itens_entrada}}">
        <label for="">Descrição</label>
        <input type="text" name="descricao" id="descricao" value="{{$itensentrada->descricao}}">
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')