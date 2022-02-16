<div class="sidebar" data-color="white" data-active-color="carsystem">
    <div class="logo">
        <a class="simple-text logo-mini">
            <div class="logo-image-small">
                <?php
                    $avatar = '';
                    if (auth()->user()->foto) {
                        $avatar = url("../storage/app/".auth()->user()->foto);
                    } else {
                        $avatar = asset('paper').'/img/default-avatar.png';
                    }
                    
                ?>
                <img src="<?php echo e($avatar); ?>" class="rounded-circle"  title="foto de <?php echo e(auth()->user()->name); ?>" alt="foto de <?php echo e(auth()->user()->name); ?>">             
            </div>
        </a>
        <span class="simple-text logo-normal">
            <?php echo e(auth()->user()->name); ?>

        </span>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="<?php echo e($elementActive == 'dashboard' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('home')); ?>">
                    <i class="nc-icon nc-bank"></i>
                    <p><?php echo e(__('Home')); ?></p>
                </a>
            </li>
            
            <li class="<?php echo e($elementActive == 'profile' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('profile.edit')); ?>">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                    <p><?php echo e(__('Minha Conta')); ?></p>
                </a>
            </li>    
                    

            <li class="<?php echo e($elementActive == 'produto' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('produto.index')); ?>">
                    <i class="fa fa-car"></i>
                    <p><?php echo e(__('Carro')); ?></p>
                </a>
            </li>

            <li class="<?php echo e($elementActive == 'categoria' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('categoria.index')); ?>">
                    <i class="fa fa-list-alt"></i>
                    <p><?php echo e(__('Categoria')); ?></p>
                </a>
            </li>

            <li class="<?php echo e($elementActive == 'fornecedor' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('fornecedor.index')); ?>">
                    <i class="fa fa-handshake-o"></i>
                    <p><?php echo e(__('Fornecedor')); ?></p>
                </a>
            </li>

            <li class="<?php echo e($elementActive == 'cliente' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('cliente.index')); ?>">
                    <i class="fa fa-users"></i>
                    <p><?php echo e(__('cliente')); ?></p>
                </a>
            </li>

            <li class="<?php echo e($elementActive == 'funcionario' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('funcionario.index')); ?>">
                    <i class="fa fa-user-circle-o"></i>
                    <p><?php echo e(__('Funcionario')); ?></p>
                </a>
            </li>

            <li class="<?php echo e($elementActive == 'formapagamento' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('formapagamento.index')); ?>">
                    <i class="fa fa-money"></i>
                    <p><?php echo e(__('Forma Pagamento')); ?></p>
                </a>
            </li>

            <li class="<?php echo e($elementActive == 'venda' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('venda.index')); ?>">
                    <i class="fa fa-shopping-cart"></i>
                    <p><?php echo e(__('Venda')); ?></p>
                </a>
            </li>


            <li class="<?php echo e($elementActive == 'compra' ? 'active' : ''); ?>">
                <a href="<?php echo e(route('compra.index')); ?>">
                    <i class="fa fa-truck"></i>
                    <p><?php echo e(__('Compra')); ?></p>
                </a>
            </li>
            
           
        </ul>
    </div>
</div>
<?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/layouts/navbars/auth.blade.php ENDPATH**/ ?>