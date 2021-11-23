@extends('layouts.main')

@section('titulo', 'Cadastro de fornecedor')

@section('conteudo')
    <div id="form">
    
        <form action="{{route('fornecedor.create')}}" method="post"> 
            @csrf
            <label for="">Nome Fornecedor</label>
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




