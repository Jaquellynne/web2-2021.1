@extends('layouts.main')

@section('titulo', 'Cadastro de clientes')

@section('conteudo')
    <div id="form">
     <form action="{{route('clientes.create')}}" method="post">  
        @csrf
        <label for="">Nome clientes</label>
        <input type="text" name="nome" id="nome">
        <label for="">Debito</label>
        <input type="text" name="debito" id="debito">
        <label for="">Descricao</label>
        <input type="text" name="descricao" id="descricao">
        <input type="submit" value="cadastrar">
      </form>
    </div>

@endsection('conteudo')


