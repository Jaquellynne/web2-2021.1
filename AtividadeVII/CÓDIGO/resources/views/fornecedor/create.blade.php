@extends('layouts.main')

@section('titulo', 'Cadastro de fornecedor')

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
    
        <form action="{{route('fornecedor.create')}}" method="post"> 
            @csrf
            <label for="">Nome Fornecedor</label>
            <input type="text" name="nome" id="nome">
            <label for="">CNPJ</label>
            <input type="text" name="cnpj" id="cnpj">
            <label for="">Email</label>
            <input type="text" name="email" id="email">
            <input type="submit" value="cadastrar">
        </form>
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




