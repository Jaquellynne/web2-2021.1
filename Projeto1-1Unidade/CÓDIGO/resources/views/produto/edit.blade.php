@extends('layouts.main')

@section('titulo', 'Edição de produtos')

@section('conteudo')
    <form action="{{route('produto.update', ['id' => $produto->id])}}" method="post">     
        @csrf
        @method('PUT')
        <label for="">Nome produto</label>
        <input type="text" class="teste @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{$produto->nome}}">
            @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Tipo</label>
        <input type="text" class="teste @error('tipo') is-invalid  @enderror" name="tipo" id="tipo" value="{{$produto->tipo}}">
            @error('tipo')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')