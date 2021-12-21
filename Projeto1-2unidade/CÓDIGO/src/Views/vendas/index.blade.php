@extends('layouts.main')

@section('titulo', 'Página de vendas')

@section('conteudo')

    <div id="form">
        @foreach ($vendas as $vendas)
        <ul>
            <li> Quantidade: {{$vendas->quantidade}};</li>
            <li> Valor {{$vendas->valor}}</li>
            <li>Data da Venda {{$vendas->data_venda</li>
            <li><a href="{{route('vendas.edit', ['id' => $vendas->id])}}">Editar venda</a></li>
            <form action="{{route('vendas.delete', ['id' => $vendas->id])}}" method="post">
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
                            <td>Valor</td>
                            <td>Cliente</td>
                            <td>Forma de pagamento</td>
                            <td>Data de venda</td>
                            <td>Mais informações</td>
                    </tr>
                </thead>
            </table>
    </div>
@endsection('conteudo')