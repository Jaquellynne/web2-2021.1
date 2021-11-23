@extends('layouts.main')

@section('titulo', 'Cadastro de produtos')

@section('conteudo')
    <div id="form">

        <form action="{{route('produto.create')}}" method="post">  
             @csrf
            <label for="">Nome produto</label>
             <input type="text" class="teste @error('nome') is-invalid  @enderror" name="nome" id="nome" value="{{ old('nome')}}">
              @error('nome')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
              @enderror
            <label for="">Tipo</label>
            <input type="text" class="teste @error('tipo') is-invalid  @enderror" name="tipo" id="tipo" value="{{ old('tipo')}}">
            @error('tipo')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            <input type="submit" value="cadastrar">
        </form>
    </div>
    <table class="table">
      <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome do produto</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
    </table>

@endsection('conteudo')



