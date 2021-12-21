@extends('layouts.main')

@section('titulo', 'Cadastro de produtos')

@section('conteudo')
    <div id="form">

        <form action="{{route('produtos.create')}}" method="post">  
             @csrf
            <label for="">Nome</label>
             <input type="text" class="teste @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{ old('nome')}}">
              @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
              @enderror
            <label for="">Ano</label>
            <input type="text" class="teste @error('ano') is-invalid  @enderror" name="ano" id="ano" value="{{ old('ano')}}">
            @error('tipo')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <input type="submit" value="Cadastrar">
            <input type="submit" value="Cancelar">
        </form>
    </div>
    <div class="content">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>Ano</td>
                        <td>Valor de venda</td>
                        <td>Mais informações</td>
                    </tr>
                </thead>
            </table>
    </div>

@endsection('conteudo')



