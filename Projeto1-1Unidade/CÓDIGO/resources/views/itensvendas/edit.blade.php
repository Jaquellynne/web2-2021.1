@extends('layouts.main')

@section('titulo', 'Edição de itens vendas')

@section('conteudo')
    <form action="{{route('ItensVendas.update', ['id' => $ItensVendas->id])}}" method="post">      
        @csrf
        @method('PUT')
        <label for="">Quantidade </label>
        <input type="text" class="teste @error('quantidade') is-invalid  @enderror" name="quantidade" id="quantidade" value="{{$ItensVendas->quantidade}}">
            @error('quantidade')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Valor Unitario</label>
        <input type="text" class="teste @error('valor_unitario') is-invalid  @enderror" name="valor_unitario" id="valor_unitario" value="{{$ItensVendas->valor_unitario}}">
            @error('valor_unitario')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <input type="submit" value="Alterar">
    </form>
@endsection('conteudo')
