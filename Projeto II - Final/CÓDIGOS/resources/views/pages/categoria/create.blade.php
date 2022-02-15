@extends('layouts.app', [
'class' => '',
'elementActive' => 'categoria'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('categoria.index') }}">Categoria</a></li>
                            <li class="breadcrumb-item active text-white">Cadastro</li>
                        </ol>
                        <h6 class="d-flex justify-content-end">
                            <a class="btn btn-info" href="{{ route('categoria.index') }}" role="button">Voltar</a>
                        </h6>
                        <h4 class="card-title">Cadastro - Categoria</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('categoria.store') }}" class="form" method="POST">
                            @csrf
                            @include('pages.categoria.formulario.form')
                            <h6 class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <a class="btn btn-secondary ml-3" href="{{ route('categoria.index') }}"
                                    role="button">Cancelar</a>
                            </h6>
                        </form>
                    </div>

                    <div class="card-footer">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
