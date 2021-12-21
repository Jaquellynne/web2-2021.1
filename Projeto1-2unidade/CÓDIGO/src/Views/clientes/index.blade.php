@extends('layouts.main')

@section('titulo', 'Página de clientes')
@section('conteudo')
    <div id="form">
        @foreach ($clientes as $cliente)
        <ul>
            <li> nome do cliente: {{$cliente->nome}};</li>
            <li> CPF: {{$cliente->cpf}}</li>
            <li><a href="{{ route('clientes.edit', ['id' => $cliente->id])}}">Editar cliente</a></li>

        <form action="{{route('clientes.delete', ['id' => $cliente->id])}}" method="post">
             @csrf
            @method('DELETE')
            <input type="submit" value= "deletar">
        </form> 
        </ul>
        @endforeach
    </div>
    <div class="content">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>CPF</td>
                        <td>Mais informações</td>
                    </tr>
                </thead>
            </table>
    </div>
@endsection('conteudo')
