@extends('layouts.main')

@section('titulo', 'Página de clientes')

@section('conteudo')

    <div id="form">
        @foreach ($clientes as $cliente)
        <ul>
            <li> nome do cliente: {{$cliente->nome}};</li>
            <li> debito do cliente {{$cliente->debito}}</li>
            <li> descricao  {{$cliente->descricao}}</li>
            <li><a href="edit/{{$cliente->id}}">Editar cliente</a></li>

        <form action="{{route('clientes.delete', ['id' => $cliente->id])}}" method="post">
             @csrf
            @method('DELETE')
            <input type="submit" value= "deletar">
        </form> 
        </ul>
        @endforeach
    </div>

@endsection('conteudo')
