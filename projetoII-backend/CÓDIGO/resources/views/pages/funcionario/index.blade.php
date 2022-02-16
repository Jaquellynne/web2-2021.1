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
                            <li class="breadcrumb-item text-white">Funcionarios</li>
                        </ol>

                        <h6 class="d-flex justify-content-end">
                            <a class="btn btn-info" href="{{ route('funcionario.create') }}">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Funcionario
                            </a>
                        </h6>

                        @include('pages.alerta.alert')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-hover" id="funcionario">
                                <thead class="thead-light text-primary">
                                    <tr class="text-center">
                                        <th>
                                            Nome
                                        </th>

                                        <th>
                                            CPF
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
                                            Data Nascimento
                                        </th>

                                        <th>
                                            Opções
                                        </th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($funcionarios as $funcionario)
                                        <tr class="text-center">
                                            <td>{{ $funcionario->name }}</td>
                                            <td>{{ $funcionario->cpf }}</td>
                                            <td>{{ $funcionario->endereco }}</td>
                                            <td>{{ $funcionario->telefone }}</td>
                                            <td>{{ $funcionario->email }}</td>
                                            <td>{{ date('d/m/Y', strtotime($funcionario->dataNascimento)) }}</td>
                                            <td style="width:220px;">
                                                <a class="btn btn-warning"
                                                    href="{{ route('funcionario.edit', $funcionario->id) }}">
                                                    <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                                </a>
                                                <!-- Button trigger modalExcluir -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#excluir-{{ $funcionario->id }}">
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

    @include('pages.funcionario.modal.excluir')
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#funcionario').DataTable({
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
