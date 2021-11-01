<h1>Página de consulta de endereco</h1>

@foreach ($endereco as $endereco)
<ul>
    <li> nome do logradouro: {{$endereco->logradouro}};</li>
    <li> bairro {{$endereco->bairro}}</li>
    <li> cidade  {{$endereco->cidade}}</li>
    <li> uf  {{$endereco->uf}}</li>
</ul>
@endforeach
