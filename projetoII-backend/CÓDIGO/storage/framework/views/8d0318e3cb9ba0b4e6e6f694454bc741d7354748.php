

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li class="breadcrumb-item active"><a href="<?php echo e(route('compra.index')); ?>">Compras</a></li>
                            <li class="breadcrumb-item active text-white">Edição Compra</li>
                        </ol>
                        <h6 class="d-flex  justify-content-end">
                            <a class="btn btn-info" href="<?php echo e(route('compra.index')); ?>" role="button">Voltar</a>
                        </h6>
                    </div>
                    <form action="<?php echo e(route('compra.update', $compra->id)); ?>" class="form" method="POST">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="card-body">

                            <div class="form-row ml-2">
                                <div class="form-group col-md-4">
                                    <label for="idFornecedor">Fornecedor</label>
                                    <select class="form-control" id="idFornecedor" name="idFornecedor" readonly="readonly"
                                        required>
                                        <option value="<?php echo e($compra->fornecedor->id ?? old('idFornecedor')); ?>" selected>
                                            <?php echo e($compra->fornecedor->nome ?? old('idFornecedor')); ?></option>
                                    </select>
                                </div>

                                <div class="form-group col-md-3">
                                    <label for="idFormaPagamento">Forma Pagamento</label>
                                    <select class="form-control" id="idFormaPagamento" name="idFormaPagamento" required>
                                        <option value="<?php echo e($compra->formaPagamento->id ?? old('idFormaPagamento')); ?>"
                                            selected><?php echo e($compra->formaPagamento->descricao ?? old('idFormaPagamento')); ?>

                                        </option>
                                        <?php $__currentLoopData = $formaspag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $formapag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($formapag->id); ?>"><?php echo e($formapag->descricao); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                            </div>

                            <div class="table-responsive-sm col-12">
                                <table class="table table-hover" id="produto">
                                    <thead class="thead-light text-primary">
                                        <tr class="text-center">
                                            <th>
                                                Produto
                                            </th>

                                            <th>
                                                Valor Unitário
                                            </th>

                                            <th>
                                                Quantidade
                                            </th>

                                            <th>
                                                Valor Total
                                            </th>

                                            <th>
                                                Remover
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody id="prod">
                                        <?php $__currentLoopData = $compra->produtosCompra; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodCompra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                            <tr class="text-center prod" id="<?php echo e($cont); ?>">
                                                <td class="col-4">
                                                    <select class="form-control produtoId"
                                                        id="produto_id<?php echo e($cont); ?>"
                                                        onchange="trazValor(<?php echo e($cont); ?>);" name="idProduto[]"
                                                        required>
                                                        <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($prodCompra->idProduto == $produto->id): ?>
                                                                <option value="<?php echo e($produto->id ?? old('idProduto[]')); ?>"
                                                                    selected><?php echo e($produto->nome ?? old('idProduto[]')); ?>

                                                                </option>
                                                            <?php else: ?>
                                                                <option value="<?php echo e($produto->id); ?>">
                                                                    <?php echo e($produto->nome); ?></option>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="">Escolha um carro</option>
                                                    </select>
                                                </td>
                                                <td class="col-3">
                                                    <input type="text" class="form-control" readonly="readonly"
                                                        value="<?php echo e(number_format($prodCompra->valorUnitario, 2, ',', '.') ?? old('valorUnitario[]')); ?>"
                                                        name="valorUnitario[]" id="valor<?php echo e($cont); ?>">
                                                </td>
                                                <td class="col-1">
                                                    <input type="number" class="form-control qtd_produto" min="1"
                                                        value="<?php echo e($prodCompra->quantidade ?? old('quantidade[]')); ?>"
                                                        onchange="calcTotal(<?php echo e($cont); ?>);" name="quantidade[]"
                                                        id="qtd<?php echo e($cont); ?>">
                                                </td>
                                                <td class="col-3">
                                                    <input type="text" class="form-control valorTotal" readonly="readonly"
                                                        value="<?php echo e(number_format($prodCompra->valorTotal, 2, ',', '.') ?? old('valorTotal[]')); ?>"
                                                        name="valorTotal[]" id="valorTotal<?php echo e($cont); ?>">
                                                </td>
                                                <td class="col-1">
                                                    <a href="#" onclick="excluirProd(<?php echo e($cont); ?>);">
                                                        <i class="fa fa-trash fa-2x text-danger"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                                $cont++;
                                            ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <a class="btn btn-outline-success" href="#" id="addprod">
                                    <i class="fa fa-plus" aria-hidden="true"> adicionar item</i>
                                </a>
                            </div>

                            <hr class="ml-3 mr-3" />

                            <div class="form-row ml-2 d-flex justify-content-between">
                                <div class="form-group col-md-2">
                                    <label for="created">Data</label>
                                    <input type="text" class="form-control" readonly="readonly"
                                        value="<?php echo e(date('d/m/Y', strtotime($compra->created)) ?? old('created')); ?>"
                                        name="created" id="created">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="notaFiscal">Código de Compra</label>
                                    <input type="text" class="form-control" readonly="readonly"
                                        value="<?php echo e($compra->notaFiscal ?? old('notaFiscal')); ?>" name="notaFiscal"
                                        id="notaFiscal">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="qtd_produto">Total de Produtos</label>
                                    <input type="text" class="form-control" readonly="readonly"
                                        value="<?php echo e($compra->quantidade ?? old('qtd_produto')); ?>" name="qtd_produto"
                                        id="qtd_produto">
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="compraTotal">Total a Pagar</label>
                                    <input type="text" class="form-control" readonly="readonly"
                                        value="R$ <?php echo e(number_format($compra->valorTotal, 2, ',', '.') ?? old('compraTotal')); ?>"
                                        name="compraTotal" id="compraTotal">
                                </div>
                            </div>

                            <hr class="ml-3 mr-3" />
                        </div>

                        <div class="card-footer d-flex  justify-content-end">
                            <button type="button" id="finalizar" class="btn btn-primary">Alterar Compra</button>
                            <a class="ml-3 btn btn-secondary" href="<?php echo e(route('compra.index')); ?>"
                                role="button">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('pages.compra.scripts.formataProdutos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', [
'class' => '',
'elementActive' => 'compra'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/pages/compra/edit.blade.php ENDPATH**/ ?>