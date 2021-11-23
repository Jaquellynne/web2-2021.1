@extends('layouts.main')

@section('titulo', 'Edição de itens entrada')

@section('conteudo')
    <form action="{{route('itensentrada.update', ['id' => $itensentrada->id])}}" method="post">       
        @csrf
        @method('PUT')
        <label for="">Nome dos itens entrada</label>
        <input type="text"  class="teste @error('nome_itens_entrada') is-invalid  @enderror" name="nome_itens_entrada" id="nome_itens_entrada" value="{{$itensentrada->nome_itens_entrada}}">
            @error('nome_itens_entrada')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Descrição</label>
        <input type="text" class="teste @error('descricao') is-invalid  @enderror" name="descricao" id="descricao" value="{{$itensentrada->descricao}}">
        @error('descricao')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')