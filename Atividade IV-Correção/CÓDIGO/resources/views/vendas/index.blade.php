<h1>Página das vendas</h1>


@foreach ($vendas as $vendas)
<ul>
    <li> Valor total da venda: {{$vendas->valor_total}};</li>
    <li> Valor do troco da venda {{$vendas->valor_troco}}</li>
    <li> Desconto  {{$vendas->desconto}}</li>
    <li><a href="edit/{{$vendas->id}}">Editar venda</a></li>

    <form action="{{route('vendas.delete', ['id' => $vendas->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value= "deletar">
    </form> 

</ul>
@endforeach
