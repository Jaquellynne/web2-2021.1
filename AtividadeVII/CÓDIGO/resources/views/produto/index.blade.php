@extends('layouts.main')

@section('titulo', 'Página de produtos')

@section('conteudo')

    <div id="form">
        @foreach ($produto as $produto)
        <ul>
            <li> nome do produto: {{$produto->nome}};</li>
            <li> tipo do produto {{$produto->tipo}}</li>
            <li><a href="{{route('produto.edit', ['id' => $produto->id])}}">Editar produto</a></li>

            <form action="{{route('produto.delete', ['id' => $produto->id])}}" method="post">
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
                <th scope="col">Nome do produto</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
    </table>
@endsection('conteudo')