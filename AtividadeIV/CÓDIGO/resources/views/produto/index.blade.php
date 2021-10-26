<h1>Página de produtos</h1>


@foreach ($produto as $produto)
<ul>
    <li> nome do produto: {{$produto->nome}};</li>
    <li> tipo do produto {{$produto->tipo}}</li>
    <li><a href="edit/{{$produto->id}}">Editar produto</a></li>

<form action="../produto/{{$produto->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value= "deletar">
</form> 
</ul>
@endforeach
