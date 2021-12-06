@extends('layouts.main')

@section('titulo', 'Editar compra')

@section('conteudo')
    
    <form action="{{route('compras.update', ['id' => $compras->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Quantidade</label>
        <input type="text"  class="teste @error('quantidade') is-invalid  @enderror"  name="quantidade" id="quantidade" value="{{ old('quantidade')}}">
            @error('quantidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Valor total</label>
        <input type="text"  class="teste @error('valor_total') is-invalid  @enderror" name="valor_total" id="valor_total" value="{{ old('valor_total')}">
            @error('valor_total')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
    
@endsection('conteudo')
