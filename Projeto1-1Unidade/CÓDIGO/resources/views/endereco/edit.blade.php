@extends('layouts.main')

@section('titulo', 'Edição de endereco')

@section('conteudo')

    <form action="{{route('endereco.update', ['id' => $endereco->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome do logradouro</label>
        <input type="text" class="teste @error('logradouro') is-invalid  @enderror" name="logradouro" id="logradouro" value="{{$endereco->logradouro}}">
            @error('logradouro')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Bairro</label>
        <input type="text" class="teste @error('bairro') is-invalid  @enderror" name="bairro" id="bairro" value="{{$endereco->bairro}}">
            @error('bairro')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Cidade</label>
        <input type="text"  class="teste @error('cidade') is-invalid  @enderror" name="cidade" id="cidade" value="{{$endereco->cidade}}">
            @error('cidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Uf</label>
        <input type="text" class="teste @error('uf') is-invalid  @enderror" name="uf" id="uf" value="{{$endereco->uf}}">
            @error('uf')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')