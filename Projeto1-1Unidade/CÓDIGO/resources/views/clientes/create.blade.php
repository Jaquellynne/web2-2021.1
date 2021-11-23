@extends('layouts.main')

@section('titulo', 'Cadastro de clientes')

@section('conteudo')
    <div id="form">
  
     <form action="{{route('clientes.create')}}" method="post">  
        @csrf
        <label for="">Nome clientes</label>
        <input type="text"  class="teste @error('nome') is-invalid  @enderror"  name="nome" id="nome" value="{{ old('nome')}}">
            @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Debito</label>
        <input type="text"  class="teste @error('debito') is-invalid  @enderror" name="debito" id="debito" value="{{ old('debito')}">
            @error('debito')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Descricao</label>
        <input type="text" class="teste @error('descricao') is-invalid  @enderror" name="descricao" id="descricao" value="{{ old('descricao')}">
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
                <th scope="col">Nome do Cliente</th>
                <th scope="col">Débito</th>
                <th scope="col">Descrição</th>
            </tr>
        </thead>
    </table>

@endsection('conteudo')


