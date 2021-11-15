@extends('layouts.main')

@section('titulo', 'Página de fornecedor')

@section('conteudo')

    <div id="form">
        @foreach ($fornecedor as $fornecedor)
        <ul>
            <li> nome do fornecedor: {{$fornecedor->nome}};</li>
            <li> CNPJ do fornecedor {{$fornecedor->CNPJ}}</li>
            <li> email  {{$fornecedor->email}}</li>
            <li><a href="{{route('fornecedor.edit', ['id' => $fornecedor->id])}}">Editar fornecedor</a></li>

            <form action="{{route('fornecedor.delete', ['id' => $fornecedor->id])}}" method="post">
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
                <th scope="col">Nome do fornecedor</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
    </table>
@endsection('conteudo')