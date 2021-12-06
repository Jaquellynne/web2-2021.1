@extends('layouts.main')

@section('titulo', 'Editar vendas')

@section('conteudo')
    <form action="{{route('vendas.update', ['id' => $vendas->id])}}" method="post">     
        @csrf
        @method('PUT')
        <label for="">Quantidade</label>
             <input type="text" class="teste @error('quantidade') is-invalid  @enderror" name="quantidade" id="quantidade" value="{{ old('quantidade')}}">
              @error('quantidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
              @enderror
            <label for="">Valor</label>
            <input type="text" class="teste @error('valor') is-invalid  @enderror" name="valor" id="valor" value="{{ old('valor')}}">
            @error('valor')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <label for="">Data da venda</label>
            <input type="text" class="teste @error('data_venda') is-invalid  @enderror" name="data_venda" id="data_venda" value="{{ old('data_venda')}}">
            @error('data_venda')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror  
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')