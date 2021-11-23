@extends('layouts.main')

@section('titulo', 'Página de vendas')

@section('conteudo')

    <div id="form">
        @foreach ($vendas as $vendas)
        <ul>
            <li> Valor total da venda: {{$vendas->valor_total}};</li>
            <li> Valor do troco da venda {{$vendas->valor_troco}}</li>
            <li> Desconto  {{$vendas->desconto}}</li>
            <li><a href="{{route('vendas.edit', ['id' => $vendas->id])}}">Editar venda</a></li>

        <form action="{{route('vendas.delete', ['id' => $vendas->id])}}" method="post">
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
                <th scope="col">Valor total da venda</th>
                <th scope="col">Valor do troco</th>
                <th scope="col">Desconto</th>
            </tr>
        </thead>
    </table>
@endsection('conteudo')
