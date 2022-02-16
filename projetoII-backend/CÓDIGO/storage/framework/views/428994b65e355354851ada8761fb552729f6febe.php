

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li class="breadcrumb-item text-white">Carros</li>
                        </ol>

                        <h6 class="d-flex justify-content-end">
                            <a class="btn btn-info" href="<?php echo e(route('produto.create')); ?>">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i> Carro
                            </a>
                        </h6>

                        <?php echo $__env->make('pages.alerta.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-hover" id="produto">
                                <thead class="thead-light text-primary">
                                    <tr class="text-center">
                                        <th>
                                            Nome
                                        </th>

                                        <th>
                                            Categoria
                                        </th>

                                        <th>
                                            Marca
                                        </th>

                                        <th>
                                            Cor
                                        </th>

                                        <th>
                                            Ano
                                        </th>

                                        <th>
                                            Qtd
                                        </th>

                                        <th>
                                            Valor Compra
                                        </th>
                                        <th>
                                            Valor Venda
                                        </th>

                                        <th>
                                            Opções
                                        </th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="text-center">
                                            <td><?php echo e($produto->nome); ?></td>
                                            <td><?php echo e($produto->categoria->nome); ?></td>
                                            <td><?php echo e($produto->marca); ?></td>
                                            <td><?php echo e($produto->cor); ?></td>
                                            <td><?php echo e($produto->ano); ?></td>
                                            <td><?php echo e($produto->quantidade); ?></td>
                                            <td><?php echo e(number_format($produto->valorCompra, 2, ',', '.')); ?></td>
                                            <td><?php echo e(number_format($produto->valorVenda, 2, ',', '.')); ?></td>
                                            <td style="width:220px;">
                                                <a class="btn btn-warning"
                                                    href="<?php echo e(route('produto.edit', $produto->id)); ?>">
                                                    <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                                </a>
                                                <!-- Button trigger modalExcluir -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#excluir-<?php echo e($produto->id); ?>">
                                                    <i class="fa fa-trash fa-2x" aria-hidden="true"></i>
                                                </button>

                                            </td>
                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

    <?php echo $__env->make('pages.produto.modal.excluir', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#produto').DataTable({
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
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', [
'class' => '',
'elementActive' => 'produto'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/pages/produto/index.blade.php ENDPATH**/ ?>