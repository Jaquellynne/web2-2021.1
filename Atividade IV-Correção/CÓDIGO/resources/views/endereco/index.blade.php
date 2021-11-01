<h1>Página de endereco</h1>


@foreach ($endereco as $endereco)
<ul>
    <li> nome do logradouro: {{$endereco->logradouro}};</li>
    <li> bairro {{$endereco->bairro}}</li>
    <li> cidade  {{$endereco->cidade}}</li>
    <li> uf  {{$endereco->uf}}</li>
    <li><a href="edit/{{$endereco->id}}">Editar endereco</a></li>

    <form action="{{route('endereco.delete', ['id' => $endereco->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value= "deletar">
    </form> 
</ul>
@endforeach
