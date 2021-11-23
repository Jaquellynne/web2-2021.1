@extends('layouts.main')

@section('titulo', 'Página de itens entrada')

@section('conteudo')

    <div id="form">
        @foreach ($itensentrada as $itensentrada)
        <ul>
            <li> nome itens entrada: {{$itensentrada->nome_itens_entrada}};</li>
            <li> descricao {{$itensentrada->descricao}}</li>
            <li><a href="{{route('itensentrada.edit', ['id' => $itensentrada->id])}}">Editar itens entrada</a></li>

             <form action="{{route('itensentrada.delete', ['id' => $itensentrada->id])}}" method="post">
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
                <th scope="col">Nome itens entrada</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
    </table>
@endsection('conteudo')
