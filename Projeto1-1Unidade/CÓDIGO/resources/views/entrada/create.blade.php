@extends('layouts.main')

@section('titulo', 'Cadastro de entrada')

@section('conteudo')
    <div id="form">
    
        <form action="{{route('entrada.create')}}" method="post">  
             @csrf
            <label for="">Data da entrada</label>
            <input type="text" class="teste @error('data_entrada') is-invalid  @enderror" name="data_entrada" id="data_entrada" value="{{ old('data_entrada')}}">
                @error('data_entrada')
                    <div class="invalid-feedback">
                         {{$message}}
                    </div>
                @enderror
            <label for="">Data da saida</label>
            <input type="text" class="teste @error('data_saida') is-invalid  @enderror" name="data_saida" id="data_saida" value="{{ old('data_saida')}}">
                @error('data_saida')
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
                <th scope="col">Data da entrada</th>
                <th scope="col">Data da saida</th>
            </tr>
        </thead>
    </table>

@endsection('conteudo')   



