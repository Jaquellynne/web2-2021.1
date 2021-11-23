@extends('layouts.main')

@section('titulo', 'Cadastro de endereco')

@section('conteudo')
    <div id="form">
    
        <form action="{{route('endereco.create')}}" method="post">  
            @csrf
            <label for="">Nome do logradouro</label>
            <input type="text" class="teste @error('logradouro') is-invalid  @enderror" name="logradouro" id="logradouro" value="{{ old('logradouro')}}">
                @error('logradouro')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            <label for="">Bairro</label>
            <input type="text" class="teste @error('bairro') is-invalid  @enderror" name="bairro" id="bairro" value="{{ old('bairro')}}">
                 @error('bairro')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            <label for="">Cidade</label>
            <input type="text" class="teste @error('cidade') is-invalid  @enderror" name="cidade" id="cidade" value="{{ old('cidade')}}">
                @error('cidade')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            <label for="">UF</label>
            <input type="text" class="teste @error('uf') is-invalid  @enderror" name="uf" id="uf" value="{{ old('uf')}}">
                @error('uf')
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
                <th scope="col">Nome do logradouro</th>
                <th scope="col">Nome do bairro</th>
                <th scope="col">Cidade</th>
                <th scope="col">Uf</th>
            </tr>
        </thead>
    </table>

@endsection('conteudo')



