@extends('layouts.app', [
'class' => '',
'elementActive' => 'formapagamento'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('formapagamento.index') }}">Formas de
                                    Pagamento</a></li>
                            <li class="breadcrumb-item active text-white">Edição</li>
                        </ol>
                        <h6 class="d-flex justify-content-end">
                            <a class="btn btn-info" href="{{ route('formapagamento.index') }}" role="button">Voltar</a>
                        </h6>
                        <h4 class="card-title">Edição - {{ $formapagamento->descricao }}</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('formapagamento.update', $formapagamento->id) }}" class="form"
                            method="POST">
                            @csrf
                            @method('PUT')
                            @include('pages.formapagamento.formulario.form')
                            <h6 class="d-flex justify-content-start">
                                <button type="submit" class="btn btn-primary">Alterar</button>
                                <a class="btn btn-secondary ml-3" href="{{ route('formapagamento.index') }}"
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
