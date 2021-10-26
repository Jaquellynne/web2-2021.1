<h1>Página de itens entrada</h1>


@foreach ($itensentrada as $itensentrada)
<ul>
    <li> nome itens entrada: {{$itensentrada->nome_itens_entrada}};</li>
    <li> descricao {{$itensentrada->descricao}}</li>
    <li><a href="edit/{{$itensentrada->id}}">Editar itens entrada</a></li>

    <form action="../itensentrada/{{$itensentrada->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value= "deletar">
    </form> 
</ul>
@endforeach
