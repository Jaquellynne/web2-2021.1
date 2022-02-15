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
                            <li class="breadcrumb-item text-white">Fornecedores</li>
                        </ol>

                        <h6 class="d-flex justify-content-end">
                            <a class="btn btn-info" href="{{ route('fornecedor.create') }}">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Fornecedor
                            </a>
                        </h6>

                        @include('pages.alerta.alert')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-hover" id="fornecedor">
                                <thead class="thead-light text-primary">
                                    <tr class="text-center">
                                        <th>
                                            Nome
                                        </th>

                                        <th>
                                            CNPJ
                                        </th>

                                        <th>
                                            Endereço
                                        </th>

                                        <th>
                                            Telefone
                                        </th>

                                        <th>
                                            Email
                                        </th>

                                        <th>
                                            Opções
                                        </th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($fornecedores as $fornecedor)
                                        <tr class="text-center">
                                            <td>{{ $fornecedor->nome }}</td>
                                            <td>{{ $fornecedor->cnpj }}</td>
                                            <td>{{ $fornecedor->endereco }}</td>
                                            <td>{{ $fornecedor->telefone }}</td>
                                            <td>{{ $fornecedor->email }}</td>
                                            <td style="width:220px;">
                                                <a class="btn btn-warning"
                                                    href="{{ route('fornecedor.edit', $fornecedor->id) }}">
                                                    <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                                </a>
                                                <!-- Button trigger modalExcluir -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#excluir-{{ $fornecedor->id }}">
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

    @include('pages.fornecedor.modal.excluir')
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fornecedor').DataTable({
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
