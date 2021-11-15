@extends('layouts.main')

@section('titulo', 'Edição de produtos')

@section('conteudo')
    <form action="{{route('produto.update', ['id' => $produto->id])}}" method="post">     
        @csrf
        @method('PUT')
        <label for="">Nome produto</label>
        <input type="text" name="nome" id="nome" value="{{$produto->nome}}">
        <label for="">Tipo</label>
        <input type="text" name="tipo" id="tipo" value="{{$produto->tipo}}">
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')