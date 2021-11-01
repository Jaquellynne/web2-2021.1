<h1>Página de Fornecedor</h1>


@foreach ($fornecedor as $fornecedor)
<ul>
    <li> nome do fornecedor: {{$fornecedor->nome}};</li>
    <li> CNPJ do fornecedor {{$fornecedor->CNPJ}}</li>
    <li> email  {{$fornecedor->email}}</li>
    <li><a href="edit/{{$fornecedor->id}}">Editar fornecedor</a></li>

    <form action="{{route('fornecedor.delete', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value= "deletar">
    </form> 
</ul>
@endforeach
