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
                            <li class="breadcrumb-item text-white">Formas de Pagamento</li>
                        </ol>

                        <h6 class="d-flex justify-content-end">
                            <a class="btn btn-info" href="{{ route('formapagamento.create') }}">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Forma pagamento
                            </a>
                        </h6>

                        @include('pages.alerta.alert')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-hover" id="formapagamento">
                                <thead class="thead-light text-primary">
                                    <tr class="text-center">
                                        <th>
                                            Forma de Pagamento
                                        </th>

                                        <th>
                                            Opções
                                        </th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($formapagamentos as $formapagamento)
                                        <tr class="text-center">
                                            <td>{{ $formapagamento->descricao }}</td>
                                            <td style="width:220px;">
                                                <a class="btn btn-warning"
                                                    href="{{ route('formapagamento.edit', $formapagamento->id) }}">
                                                    <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                                </a>
                                                <!-- Button trigger modalExcluir -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#excluir-{{ $formapagamento->id }}">
                                                    <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                                                </button>

                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('pages.formapagamento.modal.excluir')
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#formapagamento').DataTable({
                "language": {
                    "sProcessing": "Procesando...",
                    "sLengthMenu": "Exibir _MENU_ registros por página",
                    "sZeroRecords": "Nenhum resultado encontrado",
                    "sEmptyTable": "Nenhum resultado encontrado",
                    "sInfo": "Exibindo do _START_ até _END_ de um total de _TOTAL_ registros",
                    "sInfoEmpty": "Exibindo do 0 até 0 de um total de 0 registros",
                    "sInfoFiltered": "(Filtrado de um total de _MAX_ registros)",
                    "sInfoPostFix": "",
                    "sSearch": "Buscar:",
                    "sUrl": "",
                    "sInfoThousands": ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst": "Primero",
                        "sLast": "Último",
                        "sNext": "Próximo",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": Ativar para ordenar a columna de maneira ascendente",
                        "sSortDescending": ": Ativar para ordenar a columna de maneira descendente"
                    }
                }
            });
        });
    </script>
@endpush
