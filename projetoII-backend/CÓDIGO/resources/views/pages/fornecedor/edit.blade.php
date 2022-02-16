@extends('layouts.app', [
'class' => '',
'elementActive' => 'fornecedor'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('fornecedor.index') }}">Fornecedores</a>
                            </li>
                            <li class="breadcrumb-item active text-white">Edição</li>
                        </ol>
                        <h6 class="d-flex justify-content-end">
                            <a class="btn btn-info" href="{{ route('fornecedor.index') }}" role="button">Voltar</a>
                        </h6>
                        <h4 class="card-title">Edição - {{ $fornecedor->nome }}</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('fornecedor.update', $fornecedor->id) }}" class="form"
                            method="POST">
                            @csrf
                            @method('PUT')
                            @include('pages.fornecedor.formulario.form')
                            <h6 class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Alterar</button>
                                <a class="btn btn-secondary ml-3" href="{{ route('fornecedor.index') }}"
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

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.cnpj').mask('00.000.000/0000-00', {
                reverse: true
            });
            $('.phone').mask('(00) 00000-0000');
        });
    </script>

@endpush
