@extends('layouts.main')

@section('titulo', 'Editar produtos')

@section('conteudo')
    <form action="{{route('produtos.update', ['id' => $produto->id])}}" method="post">     
        @csrf
        @method('PUT')
        <label for="">Nome produto</label>
        <input type="text" class="teste @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{$produto->nome}}">
            @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Ano</label>
        <input type="text" class="teste @error('ano') is-invalid  @enderror" name="ano" id="ano" value="{{$produto->ano}}">
            @error('ano')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')