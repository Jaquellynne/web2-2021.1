<div class="form-row">

    <div class="form-group col-md-4">
        <label for="nome">Nome</label>
        <input type="text" class="form-control <?php echo e($errors->has('nome') ? 'is-invalid' : ''); ?>" name="nome" id="nome"
            value="<?php echo e($produto->nome ?? old('nome')); ?>">
        <?php if($errors->has('nome')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('nome')); ?></strong>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-4">
        <label for="marca">Marca</label>
        <input type="text" class="form-control <?php echo e($errors->has('marca') ? 'is-invalid' : ''); ?>" name="marca"
            id="marca" value="<?php echo e($produto->marca ?? old('marca')); ?>">
        <?php if($errors->has('marca')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('marca')); ?></strong>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-3">
        <label for="cor">Cor</label>
        <input type="text" class="form-control <?php echo e($errors->has('cor') ? 'is-invalid' : ''); ?>" name="cor" id="cor"
            value="<?php echo e($produto->cor ?? old('cor')); ?>">
        <?php if($errors->has('cor')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('cor')); ?></strong>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-1">
        <label for="ano">Ano</label>
        <input type="text" class="form-control <?php echo e($errors->has('ano') ? 'is-invalid' : ''); ?>" name="ano" id="ano"
            value="<?php echo e($produto->ano ?? old('ano')); ?>">
        <?php if($errors->has('ano')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('ano')); ?></strong>
        <?php endif; ?>
    </div>

</div>

<div class="form-row">

    <div class="form-group col-md-4">
        <label for="idCategoria">Categoria</label>
        <select class="form-control" id="idCategoria" name="idCategoria">
            <option value="<?php echo e($produto->categoria->id ?? old('idCategoria')); ?>" selected>
                <?php echo e($produto->categoria->nome ?? old('idCategoria')); ?></option>
            <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nome); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <?php if($errors->has('idCategoria')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('idCategoria')); ?></strong>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-2">
        <label for="quantidade">Quantidade</label>
        <input type="text" class="form-control <?php echo e($errors->has('quantidade') ? 'is-invalid' : ''); ?>"
            name="quantidade" id="quantidade" value="<?php echo e($produto->quantidade ?? old('quantidade')); ?>">
        <?php if($errors->has('quantidade')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('quantidade')); ?></strong>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-3">
        <label for="valorCompra">Valor Compra</label>
        <input type="text" class="form-control <?php echo e($errors->has('valorCompra') ? 'is-invalid' : ''); ?> money"
            name="valorCompra" id="valorCompra" value="<?php echo e($produto->valorCompra ?? old('valorCompra')); ?>">
        <?php if($errors->has('valorCompra')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('valorCompra')); ?></strong>
        <?php endif; ?>
    </div>

    <div class="form-group col-md-3">
        <label for="valorVenda">Valor Venda</label>
        <input type="text" class="form-control <?php echo e($errors->has('valorVenda') ? 'is-invalid' : ''); ?> money"
            name="valorVenda" id="valorVenda" value="<?php echo e($produto->valorVenda ?? old('valorVenda')); ?>">
        <?php if($errors->has('valorVenda')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('valorVenda')); ?></strong>
        <?php endif; ?>
    </div>

</div>

<div class="form-row mt-2">
    <div class="col-md-6">
        <label for="foto">Foto</label>
        <input type="file" class="form-control <?php echo e($errors->has('foto') ? 'is-invalid' : ''); ?>"
            placeholder="Selecione uma foto" id="foto" name="foto" value="<?php echo e($produto->foto ?? old('foto')); ?>">
        <?php if($errors->has('foto')): ?>
            <strong class="invalid-feedback"><?php echo e($errors->first('foto')); ?></strong>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/pages/produto/formulario/form.blade.php ENDPATH**/ ?>