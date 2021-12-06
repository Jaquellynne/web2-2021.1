@extends('layouts.main')

@section('titulo', 'Cadastro de fornecedores')
@section('conteudo')
    <div id="form">
        <form action="{{route('fornecedores.create')}}" method="post"> 
            @csrf
            <label for="">Nome</label>
            <input type="text" class="teste @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{ old('nome')}}">
              @error('nome')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
              @enderror
            <label for="">CNPJ</label>
            <input type="text" class="teste @error('cnpj') is-invalid  @enderror" name="cnpj" id="cnpj" value="{{ old('cnpj')}}">
              @error('cnpj')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
              @enderror
            <label for="">Email</label>
            <input type="text" class="teste @error('email') is-invalid  @enderror" name="email" id="email" value="{{ old('email')}}">
              @error('email')
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
                          <td>CNPJ</td>
                          <td>Email</td>
                          <td>Mais informações</td>
                    </tr>
                </thead>
            </table>
    </div>
@endsection('conteudo')




