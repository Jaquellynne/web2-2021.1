@extends('layouts.main')

@section('titulo', 'Cadastro de vendas')

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
    
    <form action="{{route('vendas.create')}}" method="post">  
        @csrf
        <label for="">Valor total da venda</label>
        <input type="text" name="valor_total" id="valor_total">
        <label for="">Valor do troco</label>
        <input type="text" name="valor_troco" id="valor_troco">
        <label for="">Desconto</label>
        <input type="text" name="desconto" id="desconto">
        <input type="submit" value="cadastrar">
    </form>
    </div>
    <table class="table">
      <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Valor total da venda</th>
                <th scope="col">Valor do troco</th>
                <th scope="col">Desconto</th>
            </tr>
        </thead>
    </table>
@endsection('conteudo')




