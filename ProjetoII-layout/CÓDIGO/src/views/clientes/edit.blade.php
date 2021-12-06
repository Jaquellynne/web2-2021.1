@extends('layouts.main')

@section('titulo', 'Editar clientes')

@section('conteudo')
    
    <form action="{{route('clientes.update', ['id' => $cliente->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome</label>
        <input type="text" class="teste @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{$cliente->nome}}">
            @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">CPF</label>
        <input type="text" class="teste @error('cpf') is-invalid  @enderror" name="cpf" id="cpf" value="{{$cliente->cpf}}">
            @error('cpf')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
    
@endsection('conteudo')
