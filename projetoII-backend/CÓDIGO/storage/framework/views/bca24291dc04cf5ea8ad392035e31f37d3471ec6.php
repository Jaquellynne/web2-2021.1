<?php echo $__env->make('layouts.navbars.navs.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="wrapper wrapper-full-page ">
    <div class="full-page section-image" filter-color="black" data-image="<?php echo e(asset('paper') . '/' . ($backgroundImagePath ?? "img/bg/background-login.jpeg")); ?>">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/layouts/page_templates/guest.blade.php ENDPATH**/ ?>