@extends('layouts.main')

@section('titulo', 'Página de compras')
@section('conteudo')
    <div id="form">
        @foreach ($compras as $compras)
        <ul>
            <li> Quantidade: {{$compras->quantidade}};</li>
            <li> Valor total: {{$compras->valor_total}}</li>
           
            <li><a href="{{ route('compras.edit', ['id' => $compras->id])}}">Editar compras</a></li>

        <form action="{{route('compras.delete', ['id' => $compras->id])}}" method="post">
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
                        <td>Quantidade de itens</td>
                        <td>Valor total</td>
                        <td>Nota Fiscal</td>
                        <td>Fornecedor</td>
                        <td>Data de compra</td>
                        <td>Mais informações</td>
                    </tr>
                </thead>
            </table>
    </div>
@endsection('conteudo')
