@extends('layouts.main')

@section('titulo', 'Página de clientes')

@section('conteudo')

    <div id="form">
        @foreach ($clientes as $cliente)
        <ul>
            <li> nome do cliente: {{$cliente->nome}};</li>
            <li> debito do cliente {{$cliente->debito}}</li>
            <li> descricao  {{$cliente->descricao}}</li>
            <li><a href="{{ route('clientes.edit', ['id' => $cliente->id])}}">Editar cliente</a></li>

        <form action="{{route('clientes.delete', ['id' => $cliente->id])}}" method="post">
             @csrf
            @method('DELETE')
            <input type="submit" value= "deletar">
        </form> 
        </ul>
        @endforeach
    </div>
    <table class="table">
      <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do Cliente</th>
                <th scope="col">Débito</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
    </table>

@endsection('conteudo')
