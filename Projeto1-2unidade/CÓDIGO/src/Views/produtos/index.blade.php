@extends('layouts.main')

@section('titulo', 'Página de produtos')

@section('conteudo')
    <div id="form">
        @foreach ($produto as $produto)
        <ul>
            <li> Nome do produto: {{$produto->nome}};</li>
            <li> Ano do produto {{$produto->ano}}</li>
            <li><a href="{{route('produtos.edit', ['id' => $produto->id])}}">Editar produto</a></li>

            <form action="{{route('produtos.delete', ['id' => $produto->id])}}" method="post">
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
                        <td>Ano</td>
                        <td>Valor de venda</td>
                        <td>Mais informações</td>
                    </tr>
                </thead>
            </table>
    </div>
@endsection('conteudo')