

<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="<?php echo e(route('home')); ?>">Home</a></li>
                            <li class="breadcrumb-item active"><a href="<?php echo e(route('produto.index')); ?>">Carros</a></li>
                            <li class="breadcrumb-item active text-white">Cadastro</li>
                        </ol>
                        <h6 class="d-flex justify-content-end">
                            <a class="btn btn-info" href="<?php echo e(route('produto.index')); ?>" role="button">Voltar</a>
                        </h6>
                        <h4 class="card-title">Cadastro - Carro</h4>
                    </div>

                    <div class="card-body">
                        <form action="<?php echo e(route('produto.store')); ?>" enctype="multipart/form-data" class="form"
                            method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo $__env->make('pages.produto.formulario.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <h6 class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                                <a class="btn btn-secondary ml-3" href="<?php echo e(route('produto.index')); ?>"
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('.money').mask('#.##0,00', {
                reverse: true
            });
        });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', [
'class' => '',
'elementActive' => 'produto'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/pages/produto/create.blade.php ENDPATH**/ ?>