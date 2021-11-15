@extends('layouts.main')

@section('titulo', 'Cadastro de produtos')

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
    
        <form action="{{route('produto.create')}}" method="post">  
             @csrf
            <label for="">Nome produto</label>
             <input type="text" name="nome" id="nome">
            <label for="">Tipo</label>
            <input type="text" name="tipo" id="tipo">
            <input type="submit" value="cadastrar">
        </form>
    </div>
    <table class="table">
      <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do produto</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
    </table>

@endsection('conteudo')



