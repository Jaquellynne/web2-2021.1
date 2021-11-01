<h1>Página das Itens vendas</h1>


@foreach ($ItensVendas as $ItensVendas)
<ul>
    <li> Quantidade: {{$ItensVendas->quantidade}};</li>
    <li> Valor Unitario {{$ItensVendas->valor_unitario}}</li>
    <li><a href="edit/{{$ItensVendas->id}}">Editar Itens venda</a></li>

    <form action="{{route('ItensVendas.delete', ['id' => $ItensVendas->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value= "deletar">
    </form> 
</ul>
@endforeach
