@extends('layouts.main')

@section('titulo', 'Cadastro de clientes')

@section('conteudo')
    <div id="form">
  
     <form action="{{route('clientes.create')}}" method="post">  
        @csrf
        <label for="">Nome</label>
        <input type="text"  class="teste @error('nome') is-invalid  @enderror"  name="nome" id="nome" value="{{ old('nome')}}">
            @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">CPF</label>
        <input type="text"  class="teste @error('cpf') is-invalid  @enderror" name="cpf" id="cpf" value="{{ old('cpf')}">
            @error('cpf')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="Cadastrar">
        <input type="submit" value="Cancelar">

      </form>
    </div>
    <div class="content">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>CPF</td>
                        <td>Mais informações</td>
                    </tr>
                </thead>
            </table>
    </div>

@endsection('conteudo')


