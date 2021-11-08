@extends('layouts.main')

@section('titulo', 'Página de entrada')

@section('conteudo')

    <div id="form">
        @foreach ($entrada as $entrada)
        <ul>
            <li> data da entrada: {{$entrada->data_entrada}};</li>
            <li> data da saida {{$entrada->data_saida}}</li>
            <li><a href="edit/{{$entrada->id}}">Editar entrada</a></li>

        <form action="{{route('entrada.delete', ['id' => $entrada->id])}}" method="post">       
            @csrf
             @method('DELETE')
            <input type="submit" value= "deletar">
        </form> 
        </ul>
        @endforeach
    </div>
@endsection('conteudo')
