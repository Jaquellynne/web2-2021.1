@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fa fa-car text-warning"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Carros</p>
                                    <p class="card-title">{{ $carros->count() }}
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ route('produto.index') }}">
                                <i class="fa fa-info-circle"></i> detalhes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fa fa-users text-success"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Clientes</p>
                                    <p class="card-title">{{ $clientes->count() }}
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ route('cliente.index') }}">
                                <i class="fa fa-info-circle"></i> detalhes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fa fa-handshake-o text-danger"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Fornecedores</p>
                                    <p class="card-title">{{ $fornecedores->count() }}
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ route('fornecedor.index') }}">
                                <i class="fa fa-info-circle"></i> detalhes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fa fa-shopping-cart text-primary"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="card-category">Vendas</p>
                                    <p class="card-title">{{ $vendas->count() }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="{{ route('venda.index') }}">
                                <i class="fa fa-info-circle"></i> detalhes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col-7">
                <div data-interval="5000" id="carrosel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < $carros->count(); $i++)
                            <li data-target="#carrosel" data-slide-to="{{ $i }}"
                                class="{{ $i == 0 ? 'active' : ' ' }}"></li>
                        @endfor
                    </ol>

                    <div class="carousel-inner center-block">
                        @for ($i = 0; $i < $carros->count(); $i++)
                            <div class="carousel-item {{ $i == 0 ? 'active' : ' ' }}">
                                <img class="d-block w-100" src="{{ url("../storage/app/{$carros[$i]->foto}") }}"
                                    alt="{{ $carros[$i]->nome }}">
                                <div class="carousel-caption d-none d-md-block bg-dark">
                                    <h5>{{ $carros[$i]->nome }}</h5>
                                    <p>Marca: {{ $carros[$i]->marca }}, Ano: {{ $carros[$i]->ano }}, Valor:
                                        {{ number_format($carros[$i]->valorVenda, 2, ',', '.') }}</p>
                                </div>
                            </div>
                        @endfor
                    </div>

                    <a class="carousel-control-prev bg-dark" href="#carrosel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next bg-dark" href="#carrosel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col"></div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {


        });
    </script>
@endpush
