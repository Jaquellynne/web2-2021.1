@extends('layouts.main')

@section('titulo', 'Cadastro de endereco')

@section('conteudo')
    <div id="form">
    @if($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach(@errors->all() as $error)
                 <li>{{ $error }}</li>
                 @endforeach
            </ul>
        </div>
    @endif
    
        <form action="{{route('endereco.create')}}" method="post">  
            @csrf
            <label for="">Nome do logradouro</label>
            <input type="text" name="logradouro" id="logradouro">
            <label for="">Bairro</label>
            <input type="text" name="bairro" id="bairro">
            <label for="">Cidade</label>
            <input type="text" name="cidade" id="cidade">
            <label for="">UF</label>
            <input type="text" name="uf" id="uf">
            <input type="submit" value="cadastrar">
        </form>
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



