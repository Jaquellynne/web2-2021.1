<footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
        <div class="row">
            <div class="credits ml-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script><?php echo e(__(', Desenvolvido por ')); ?><span class="<?php if(Auth::guest()): ?> text-white <?php endif; ?>"><?php echo e(__('Car System')); ?></span>
                </span>
            </div>
        </div>
    </div>
</footer><?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/layouts/footer.blade.php ENDPATH**/ ?>