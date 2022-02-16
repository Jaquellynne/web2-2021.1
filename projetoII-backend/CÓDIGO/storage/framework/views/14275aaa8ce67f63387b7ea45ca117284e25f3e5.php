<div class="form-row">

    <div class="form-group col-md-4">
        <label for="name" title="Campo de preenchimento obrigatório">
            Nome <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="text" class="form-control <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>" name="name" id="name"
            value="<?php echo e($funcionario->name ?? old('name')); ?>">
        <?php if($errors->has('name')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('name')); ?></strong>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-4">
        <label for="endereco" title="Campo de preenchimento obrigatório">
            Endereço <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="text" class="form-control <?php echo e($errors->has('endereco') ? 'is-invalid' : ''); ?>" name="endereco"
            id="endereco" value="<?php echo e($funcionario->endereco ?? old('endereco')); ?>">
        <?php if($errors->has('endereco')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('endereco')); ?></strong>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-4">
        <label for="nivelAcesso" title="Campo de preenchimento obrigatório">
            Nivel de Acesso <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="text" class="form-control <?php echo e($errors->has('nivelAcesso') ? 'is-invalid' : ''); ?>"
            name="nivelAcesso" id="nivelAcesso" value="<?php echo e($funcionario->nivelAcesso ?? old('nivelAcesso')); ?>">
        <?php if($errors->has('nivelAcesso')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('nivelAcesso')); ?></strong>
        <?php endif; ?>
    </div>
</div>

<div class="form-row">

    <div class="form-group col-md-4">
        <label for="cpf" title="Campo de preenchimento obrigatório">
            CPF <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="text" class="form-control <?php echo e($errors->has('cpf') ? 'is-invalid' : ''); ?> cpf" name="cpf" id="cpf"
            value="<?php echo e($funcionario->cpf ?? old('cpf')); ?>">
        <?php if($errors->has('cpf')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('cpf')); ?></strong>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-5">
        <label for="dataNascimento" title="Campo de preenchimento obrigatório">
            Data Nascimento <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="date" class="form-control <?php echo e($errors->has('dataNascimento') ? 'is-invalid' : ''); ?>"
            name="dataNascimento" id="dataNascimento"
            value="<?php echo e($funcionario->dataNascimento ?? old('dataNascimento')); ?>">
        <?php if($errors->has('dataNascimento')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('dataNascimento')); ?></strong>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-3">
        <label for="telefone" title="Campo de preenchimento obrigatório">
            Telefone <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input type="text" class="form-control <?php echo e($errors->has('telefone') ? 'is-invalid' : ''); ?> phone"
            name="telefone" id="telefone" value="<?php echo e($funcionario->telefone ?? old('telefone')); ?>">
        <?php if($errors->has('telefone')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('telefone')); ?></strong>
        <?php endif; ?>
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-4">
        <label for="email" title="Campo de preenchimento obrigatório">
            Email <span class="fa fa-asterisk text-danger"></span>
        </label>
        <input name="email" id="email" type="email"
            class="form-control <?php echo e($errors->has('email') ? 'is-invalid' : ''); ?>"
            value="<?php echo e($funcionario->email ?? old('email')); ?>">
        <?php if($errors->has('email')): ?>
            <span class="invalid-feedback" style="display: block;" role="alert">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-4">
        <label for="password" title="Campo de preenchimento obrigatório">
            Senha <span class="<?php echo e($funcionario->id ?? 'fa fa-asterisk text-danger'); ?>"></span>
        </label>
        <input name="password" id="password" type="password"
            class="form-control <?php echo e($errors->has('password') ? 'is-invalid' : ''); ?>">
        <?php if($errors->has('password')): ?>
            <span class="invalid-feedback" style="display: block;" role="alert">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-4">
        <label for="password_confirmation" title="Campo de preenchimento obrigatório">
            Confirmação de Senha <span class="<?php echo e($funcionario->id ?? 'fa fa-asterisk text-danger'); ?>"></span>
        </label>
        <input name="password_confirmation" type="password"
            class="form-control <?php echo e($errors->has('password_confirmation') ? 'is-invalid' : ''); ?>">
        <?php if($errors->has('password_confirmation')): ?>
            <span class="invalid-feedback" style="display: block;" role="alert">
                <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6">
        <label for="foto">Foto</label>
        <input type="file" class="form-control <?php echo e($errors->has('foto') ? 'is-invalid' : ''); ?>" id="foto" name="foto"
            value="<?php echo e($funcionario->foto ?? old('foto')); ?>">
        <?php if($errors->has('foto')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('foto')); ?></strong>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/pages/funcionario/formulario/form.blade.php ENDPATH**/ ?>