@extends('layouts.main')

@section('titulo', 'Página de entrada')

@section('conteudo')

    <div id="form">
        @foreach ($entrada as $entrada)
        <ul>
            <li> data da entrada: {{$entrada->data_entrada}};</li>
            <li> data da saida {{$entrada->data_saida}}</li>
            <li><a href="{{ route('entrada.edit', ['id' => $entrada->id])}}">Editar entrada</a></li>

        <form action="{{route('entrada.delete', ['id' => $entrada->id])}}" method="post">       
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
                <th scope="col">Data da entrada</th>
                <th scope="col">Data da saida</th>
            </tr>
        </thead>
    </table>
@endsection('conteudo')
