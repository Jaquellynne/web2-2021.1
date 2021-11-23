@extends('layouts.main')

@section('titulo', 'Edição de clientes')

@section('conteudo')
    
    <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome clientes</label>
        <input type="text" class="teste @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{$cliente->nome}}">
            @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Debito</label>
        <input type="text" class="teste @error('debito') is-invalid  @enderror" name="debito" id="debito" value="{{$cliente->debito}}">
            @error('debito')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Descricao</label>
        <input type="text" class="teste @error('descricao') is-invalid  @enderror" name="descricao" id="descricao" value="{{$cliente->descricao}}">
            @error('descricao')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
    
@endsection('conteudo')
