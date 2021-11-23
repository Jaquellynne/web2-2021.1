@extends('layouts.main')

@section('titulo', 'Edição de entrada')

@section('conteudo')
    <form action="{{route('entrada.update', ['id' => $entrada->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Data da entrada </label>
        <input type="text" class="teste @error('data_entrada') is-invalid  @enderror" name="data_entrada" id="data_entrada" value="{{$entrada->quantidade}}">
                @error('data_entrada')
                    <div class="invalid-feedback">
                         {{$message}}
                    </div>
                @enderror
        <label for="">Data da saida</label>
        <input type="text" class="teste @error('data_saida') is-invalid  @enderror" name="data_saida" id="data_saida" value="{{$entrada->data_saida}}">
            @error('data_saida')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
