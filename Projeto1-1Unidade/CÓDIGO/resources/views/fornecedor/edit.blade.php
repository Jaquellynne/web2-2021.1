@extends('layouts.main')

@section('titulo', 'Edição de fornecedor')

@section('conteudo')
    <form action="{{route('fornecedor.update', ['id' => $fornecedor->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome fornecedor</label>
        <input type="text" class="teste @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{$fornecedor->nome}}">
            @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">CNPJ</label>
        <input type="text" class="teste @error('cnpj') is-invalid  @enderror" name="CNPJ" id="CNPJ" value="{{$fornecedor->CNPJ}}">
            @error('cnpj')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
            @enderror
        <label for="">Email</label>
        <input type="text" class="teste @error('email') is-invalid  @enderror" name="email" id="email" value="{{$fornecedor->email}}">
            @error('email')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
