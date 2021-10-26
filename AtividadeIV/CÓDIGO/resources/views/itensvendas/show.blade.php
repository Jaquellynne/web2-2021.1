<h1>Página de consultar itensvendas</h1>

@foreach ($ItensVendas as $ItensVendas)
<ul>
    <li> Quantidade: {{$ItensVendas->quantidade}};</li>
    <li> Valor Unitario {{$ItensVendas->valor_unitario}}</li>
   
</ul>
@endforeach