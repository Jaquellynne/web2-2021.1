@extendsd('layouts.main')

@section('titulo', 'Página de endereco')

@section('conteudo')

    <div id="form">
        @foreach ($endereco as $endereco)
        <ul>
            <li> nome do logradouro: {{$endereco->logradouro}};</li>
            <li> bairro {{$endereco->bairro}}</li>
            <li> cidade  {{$endereco->cidade}}</li>
            <li> uf  {{$endereco->uf}}</li>
            <li><a href="{{ route('endereco.edit', ['id' => $endereco->id])}}">Editar endereco</a></li>

        <form action="{{route('endereco.delete', ['id' => $endereco->id])}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value= "deletar">
        </form> 
        </ul>
        @endforeach
    </div>
    <table class="table">
      <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do logradouro</th>
                <th scope="col">Nome do bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Uf</th>
            </tr>
        </thead>
    </table>

@endsection('conteudo')

