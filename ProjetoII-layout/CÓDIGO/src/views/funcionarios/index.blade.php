@extends('layouts.main')

@section('titulo', 'Página de funcionário')

@section('conteudo')

    <div id="form">
        @foreach ($funcionario as $funcionario)
        <ul>
            <li> Nome do funcionario: {{$funcionario->nome}};</li>
            <li> CNPJ do funcionario {{$funcionario->cnpj}}</li>
            <li> Email  {{$funcionario->email}}</li>
            <li><a href="{{route('funcionarios.edit', ['id' => $funcionario->id])}}">Editar funcionário</a></li>
            
            <form action="{{route('funcionarios.delete', ['id' => $funcionario->id])}}" method="post">
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
                        <td>CNPJ</td>
                        <td>Email</td>
                        <td>Mais informações</td>
                    </tr>
                </thead>
            </table>
    </div>
@endsection('conteudo')