@extends('layouts.main')

@section('titulo', 'Login de usuario')

@section('conteudo')
    <div id="form">
  
     <form action="{{route('login')}}" method="post">  
        @csrf
        <label for="">Usuário</label>
        <input type="text"  class="teste @error('usuario') is-invalid  @enderror"  name="usuario" id="usuario" value="{{ old('usuario')}}">
            @error('usuario')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <label for="">Senha</label>
        <input type="password"  class="teste @error('password') is-invalid  @enderror" name="password" id="password" value="{{ old('password')}">
            @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        <button type="submit" class="input">Entrar</button>


      </form>
    </div>
    
@endsection('conteudo')


