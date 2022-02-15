@extends('layouts.app', [
'class' => '',
'elementActive' => 'funcionario'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('funcionario.index') }}">Funcionario</a>
                            </li>
                            <li class="breadcrumb-item active text-white">Edição</li>
                        </ol>
                        <h6 class="d-flex justify-content-end">
                            <a class="btn btn-info" href="{{ route('funcionario.index') }}" role="button">Voltar</a>
                        </h6>
                        <h4 class="card-title">Edição - {{ $funcionario->name }}</h4>
                    </div>
                    <picture class="col-2">
                        @php
                            $foto_perfil = '';
                            if ($funcionario->foto) {
                                $foto_perfil = url("../storage/app/".$funcionario->foto);
                            } else {
                                $foto_perfil = asset('paper').'/img/default-avatar.png';
                            }
                            
                        @endphp
                        <img src="{{ $foto_perfil }}" class="img-fluid img-thumbnail"
                            title="foto de {{ $funcionario->name }}" alt="foto de {{ $funcionario->name }}">
                    </picture>
                    <div class="card-body">
                        <form action="{{ route('funcionario.update', $funcionario->id) }}" enctype="multipart/form-data"
                            class="form" method="POST">
                            @csrf
                            @method('PUT')
                            @include('pages.funcionario.formulario.form')
                            <h6 class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Alterar</button>
                                <a class="btn btn-secondary ml-3" href="{{ route('funcionario.index') }}"
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
            $('.cpf').mask('000.000.000-00', {
                reverse: true
            });
            $('.phone').mask('(00) 00000-0000');
        });
    </script>

@endpush
