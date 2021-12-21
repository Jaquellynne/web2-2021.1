@extends('layouts.main')
@section('titulo', 'Página de fornecedor')
@section('conteudo')
    <div id="form">
        @foreach ($fornecedor as $fornecedor)
        <ul>
            <li> Nome do fornecedor: {{$fornecedor->nome}};</li>
            <li> CNPJ do fornecedor {{$fornecedor->CNPJ}}</li>
            <li> Email  {{$fornecedor->email}}</li>
            <li><a href="{{route('fornecedores.edit', ['id' => $fornecedor->id])}}">Editar fornecedor</a></li>
            <form action="{{route('fornecedores.delete', ['id' => $fornecedor->id])}}" method="post">
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