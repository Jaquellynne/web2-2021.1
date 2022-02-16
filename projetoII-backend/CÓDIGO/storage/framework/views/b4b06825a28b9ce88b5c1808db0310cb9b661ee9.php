<?php $__env->startSection('content'); ?>
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
                                    <p class="card-title"><?php echo e($carros->count()); ?>

                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="<?php echo e(route('produto.index')); ?>">
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
                                    <p class="card-title"><?php echo e($clientes->count()); ?>

                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="<?php echo e(route('cliente.index')); ?>">
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
                                    <p class="card-title"><?php echo e($fornecedores->count()); ?>

                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="<?php echo e(route('fornecedor.index')); ?>">
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
                                    <p class="card-title"><?php echo e($vendas->count()); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <a href="<?php echo e(route('venda.index')); ?>">
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
                        <?php for($i = 0; $i < $carros->count(); $i++): ?>
                            <li data-target="#carrosel" data-slide-to="<?php echo e($i); ?>"
                                class="<?php echo e($i == 0 ? 'active' : ' '); ?>"></li>
                        <?php endfor; ?>
                    </ol>

                    <div class="carousel-inner center-block">
                        <?php for($i = 0; $i < $carros->count(); $i++): ?>
                            <div class="carousel-item <?php echo e($i == 0 ? 'active' : ' '); ?>">
                                <img class="d-block w-100" src="<?php echo e(url("../storage/app/{$carros[$i]->foto}")); ?>"
                                    alt="<?php echo e($carros[$i]->nome); ?>">
                                <div class="carousel-caption d-none d-md-block bg-dark">
                                    <h5><?php echo e($carros[$i]->nome); ?></h5>
                                    <p>Marca: <?php echo e($carros[$i]->marca); ?>, Ano: <?php echo e($carros[$i]->ano); ?>, Valor:
                                        <?php echo e(number_format($carros[$i]->valorVenda, 2, ',', '.')); ?></p>
                                </div>
                            </div>
                        <?php endfor; ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {


        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', [
'class' => '',
'elementActive' => 'dashboard'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/pages/dashboard.blade.php ENDPATH**/ ?>