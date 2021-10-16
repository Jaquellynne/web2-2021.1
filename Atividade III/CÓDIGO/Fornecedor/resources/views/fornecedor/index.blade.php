<h1>Página de Fornecedor</h1>


@foreach ($fornecedor as $fornecedor)
<ul>
    <li> nome do fornecedor: {{$fornecedor->nome}};</li>
    <li> CNPJ do fornecedor {{$fornecedor->CNPJ}}</li>
    <li> email  {{$fornecedor->email}}</li>
</ul>
@endforeach
