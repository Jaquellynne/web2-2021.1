@extends('layouts.main')

@section('titulo', 'Edição de vendas')

@section('conteudo')
    <form action="{{route('vendas.update', ['id' => $vendas->id])}}" method="post">       
        @csrf
        @method('PUT')
        <label for="">Valor total da venda </label>
        <input type="text" class="teste @error('valor_total') is-invalid  @enderror" name="valor_total" id="valor_total" value="{{$vendas->valor_total}}">
            @error('valor_total')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Valor do troco</label>
        <input type="text" class="teste @error('valor_troco') is-invalid  @enderror" name="valor_troco" id="valor_troco" value="{{$vendas->valor_troco}}">
            @error('valor_troco')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Desconto</label>
        <input type="text" class="teste @error('desconto') is-invalid  @enderror" name="desconto" id="desconto" value="{{$vendas->desconto}}">
            @error('desconto')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
