<?php $__env->startSection('content'); ?>
    <div class="content">
        <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
        <?php if(session('password_status')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('password_status')); ?>

            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image" style="background-color: #506ee4">
                        
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <?php
                                $avatar = '';
                                if (auth()->user()->foto) {
                                    $avatar = url("../storage/app/".auth()->user()->foto);
                                } else {
                                    $avatar = asset('paper').'/img/default-avatar.png';
                                }
                                
                            ?>
                            <a href="#">
                                <img class="avatar border-gray" src="<?php echo e($avatar); ?>" alt="Foto de <?php echo e(auth()->user()->name); ?>">

                                <h5 class="title" style="color: #506ee4"><?php echo e(__(auth()->user()->name)); ?></h5>
                            </a>
                            <p class="description">
                            @ <?php echo e(__(auth()->user()->name)); ?>

                            </p>
                        </div>
                        <p class="description text-center">
                            <?php echo e(__(auth()->user()->endereco)); ?>

                        </p>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <div class="button-container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                                    <h5><?php echo e(__(auth()->user()->nivelAcesso)); ?>

                                        <br>
                                        <small><?php echo e(__('Acesso')); ?></small>
                                    </h5>
                                </div>
                                <div class="col-lg-4 col-md-6 col-6 ml-auto">
                                    <h5><?php echo e(__(auth()->user()->telefone)); ?>

                                        <br>
                                        <small><?php echo e(__('Telefone')); ?></small>
                                    </h5>
                                </div>
                                <div class="col-lg-5 col-md-6 col-6 ml-auto">
                                    <h5><?php echo e(date("d/m/Y", strtotime(auth()->user()->dataNascimento))); ?>

                                        <br>
                                        <small><?php echo e(__('Data Nascimento')); ?></small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-8 text-center">
                <form class="col-md-12" action="<?php echo e(route('profile.update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title"><?php echo e(__('Editar Perfil')); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Nome')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo e(auth()->user()->name); ?>" required>
                                    </div>
                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Email')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e(auth()->user()->email); ?>" required>
                                    </div>
                                    <?php if($errors->has('email')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-round"><?php echo e(__('Salvar Alterações')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <form class="col-md-12" action="<?php echo e(route('profile.password')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title"><?php echo e(__('Alterar Senha')); ?></h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Senha Atual')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="old_password" class="form-control" placeholder="Senha Atual" required>
                                    </div>
                                    <?php if($errors->has('old_password')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('old_password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Nova Senha')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Nova Senha" required>
                                    </div>
                                    <?php if($errors->has('password')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label"><?php echo e(__('Confirmar Nova Senha')); ?></label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar Nova Senha" required>
                                    </div>
                                    <?php if($errors->has('password_confirmation')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-round"><?php echo e(__('Salvar Alterações')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', [
    'class' => '',
    'elementActive' => 'profile'
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/profile/edit.blade.php ENDPATH**/ ?>