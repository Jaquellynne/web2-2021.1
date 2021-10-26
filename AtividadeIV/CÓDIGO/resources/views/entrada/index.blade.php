<h1>Página de entrada</h1>


@foreach ($entrada as $entrada)
<ul>
    <li> data da entrada: {{$entrada->data_entrada}};</li>
    <li> data da saida {{$entrada->data_saida}}</li>
    <li><a href="edit/{{$entrada->id}}">Editar entrada</a></li>

    <form action="../entrada/{{$entrada->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value= "deletar">
    </form> 
</ul>
@endforeach
