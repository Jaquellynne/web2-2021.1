@extends('layouts.main')

@section('titulo', 'Cadastro de itens entrada')
 
@section('conteudo')
    <div id="form">
    
        <form action="{{route('itensentrada.create')}}" method="post">         
            @csrf
            <label for="">Nome itens entrada</label>
            <input type="text" class="teste @error('nome_itens_entrada') is-invalid  @enderror" name="nome_itens_entrada" id="nome_itens_entrada" value="{{ old('nome_itens_entrada')}}">
            @error('nome_itens_entrada')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <label for="">Descricao</label>
            <input type="text"  class="teste @error('descricao') is-invalid  @enderror" name="descricao" id="descricao" value="{{ old('descricao')}">
            @error('descricao')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
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




