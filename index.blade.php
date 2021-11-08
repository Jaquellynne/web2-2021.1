@extends('layouts.main')

@section('titulo', 'Página de itens entrada')

@section('conteudo')

    <div id="form">
        @foreach ($itensentrada as $itensentrada)
        <ul>
            <li> nome itens entrada: {{$itensentrada->nome_itens_entrada}};</li>
            <li> descricao {{$itensentrada->descricao}}</li>
            <li><a href="edit/{{$itensentrada->id}}">Editar itens entrada</a></li>

             <form action="{{route('itensentrada.delete', ['id' => $itensentrada->id])}}" method="post">
            @csrf
            @method('DELETE')
                <input type="submit" value= "deletar">
            </form> 
        </ul>
        @endforeach
    </div>
@endsection('conteudo')
