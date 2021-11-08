@extends('layouts.main')

@section('titulo', 'Cadastro de produtos')

@section('conteudo')
    <div id="form">
        <form action="{{route('produto.create')}}" method="post">  
             @csrf
            <label for="">Nome produto</label>
             <input type="text" name="nome" id="nome">
            <label for="">Tipo</label>
            <input type="text" name="tipo" id="tipo">
            <input type="submit" value="cadastrar">
        </form>
    </div>

@endsection('conteudo')



