@extends('layouts.main')

@section('titulo', 'Edição de clientes')

@section('conteudo')
    
    <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome clientes</label>
        <input type="text" name="nome" id="nome" value="{{$cliente->nome}}">
        <label for="">Debito</label>
        <input type="text" name="debito" id="debito" value="{{$cliente->descricao}}">
        <label for="">Descricao</label>
        <input type="text" name="descricao" id="descricao" value="{{$cliente->descricao}}">
        <input type="submit" value="Alterar">
    </form>
    
@endsection('conteudo')
