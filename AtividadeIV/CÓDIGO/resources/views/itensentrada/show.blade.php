<h1>Página de consultar itens entrada</h1>

@foreach ($itensentrada as $itensentrada)
<ul>
    <li> Nome itens entrada: {{$itensentrada->nome_itens_entrada}};</li>
    <li> descricao{{$itensentrada->descricao}}</li>
</ul>
@endforeach
