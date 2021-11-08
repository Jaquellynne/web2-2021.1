@extends('layouts.main')

@section('titulo', 'Página de produtos')

@section('conteudo')

    <div id="form">
        @foreach ($produto as $produto)
        <ul>
            <li> nome do produto: {{$produto->nome}};</li>
            <li> tipo do produto {{$produto->tipo}}</li>
            <li><a href="edit/{{$produto->id}}">Editar produto</a></li>

            <form action="{{route('produto.delete', ['id' => $produto->id])}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value= "deletar">
            </form> 
         </ul>
        @endforeach
    </div>
@endsection('conteudo')