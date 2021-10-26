<h1>Página de consultar a entrada</h1>

@foreach ($entrada as $entrada)
<ul>
    <li> Data da entrada: {{$entrada->data_entrada}};</li>
    <li> data da Saida{{$entrada->data_saida}}</li>
</ul>
@endforeach
