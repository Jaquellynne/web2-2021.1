<h1>Página de consulta de produto</h1>

@foreach ($produto as $produto)
<ul>
    <li> nome do produto: {{$produto->nome}};</li>
    <li> Tipo {{$produto->tipo}}</li>
    
</ul>
@endforeach