@extends('layouts.main')

@section('titulo', 'Cadastro de itens entrada')
 
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
    
        <form action="{{route('itensentrada.create')}}" method="post">         
            @csrf
            <label for="">Nome itens entrada</label>
            <input type="text" name="nome_itens_entrada" id="nome_itens_entrada">
            <label for="">Descricao</label>
            <input type="text" name="descricao" id="descricao">
            <input type="submit" value="cadastrar">
        </form>
    </div>
    <table class="table">
      <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome itens entrada</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
    </table>
@endsection('conteudo')




