@extends('layouts.main')

@section('titulo', 'Cadastro de entrada')

@section('conteudo')
    <div id="form">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach(@errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
             </ul>
        </div>
    @endif

        <form action="{{route('entrada.create')}}" method="post">  
             @csrf
            <label for="">Data da entrada</label>
            <input type="text" name="data_entrada" id="data_entrada">
            <label for="">Data da saida</label>
            <input type="text" name="data_saida" id="data_saida">
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



