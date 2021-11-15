@extends('layouts.main')

@section('titulo', 'Cadastro de clientes')

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

     <form action="{{route('clientes.create')}}" method="post">  
        @csrf
        <label for="">Nome clientes</label>
        <input type="text" name="nome" id="nome">
        <label for="">Debito</label>
        <input type="text" name="debito" id="debito">
        <label for="">Descricao</label>
        <input type="text" name="descricao" id="descricao">
        <input type="submit" value="cadastrar">
      </form>
    </div>
    <table class="table">
      <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do Cliente</th>
                <th scope="col">Débito</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
    </table>

@endsection('conteudo')


