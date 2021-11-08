@extends('layouts.main')

@section('titulo', 'Edição de entrada')

@section('conteudo')
    <form action="{{route('entrada.update', ['id' => $entrada->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Data da entrada </label>
        <input type="text" name="data_entrada" id="data_entrada" value="{{$entrada->quantidade}}">
        <label for="">Data da saida</label>
        <input type="text" name="data_saida" id="data_saida" value="{{$entrada->data_saida}}">
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
