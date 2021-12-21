@extends('layouts.main')

@section('titulo', 'Editar funcionário')

@section('conteudo')
    <form action="{{route('funcionarios.update', ['id' => $funcionario->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome </label>
        <input type="text" class="teste @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{$funcionario->nome}}">
            @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">CNPJ</label>
        <input type="text" class="teste @error('cnpj') is-invalid  @enderror" name="cnpj" id="cnpj" value="{{$funcionario->cnpj}}">
            @error('cnpj')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
            @enderror
        <label for="">Email</label>
        <input type="text" class="teste @error('email') is-invalid  @enderror" name="email" id="email" value="{{$funcionario->email}}">
            @error('email')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
