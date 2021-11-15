@extends('layouts.main')

@section('titulo', 'Edição de fornecedor')

@section('conteudo')
    <form action="{{route('fornecedor.update', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome fornecedor</label>
        <input type="text" name="nome" id="nome" value="{{$fornecedor->nome}}">
        <label for="">CNPJ</label>
        <input type="text" name="CNPJ" id="CNPJ" value="{{$fornecedor->CNPJ}}">
        <label for="">Email</label>
        <input type="text" name="email" id="email" value="{{$fornecedor->email}}">
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
