<h1>Página de consulta de vendas</h1>

@foreach ($vendas as $vendas)
<ul>
    <li> Valor total da venda: {{$vendas->valor_total}};</li>
    <li> Valor do troco da venda {{$vendas->valor_troco}}</li>
    <li> Desconto  {{$vendas->desconto}}</li>
</ul>
@endforeach