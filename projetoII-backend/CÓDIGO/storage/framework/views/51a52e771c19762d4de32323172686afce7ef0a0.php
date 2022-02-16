<!--
=========================================================
 Paper Dashboard - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 UPDIVISION (https://updivision.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->



<!DOCTYPE html>
<html class="perfect-scrollbar-on"  lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('paper')); ?>/img/favicon2.png">
    <link rel="icon" type="image/png" href="<?php echo e(asset('paper')); ?>/img/favicon2.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Extra details for Live View on GitHub Pages -->
    
    <title>
        <?php echo e(__('Car System')); ?>

    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?php echo e(asset('paper')); ?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo e(asset('paper')); ?>/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo e(asset('paper')); ?>/demo/demo.css" rel="stylesheet" />
    <!-- CSS DataTable -->
    <link href="<?php echo e(asset('DataTables-1.11.3')); ?>/css/jquery.dataTables.min.css" rel="stylesheet" />
</head>

<body class="<?php echo e($class); ?>">
    
    <?php if(auth()->guard()->check()): ?>
        <?php echo $__env->make('layouts.page_templates.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    
    <?php if(auth()->guard()->guest()): ?>
        <?php echo $__env->make('layouts.page_templates.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <!--   Core JS Files   -->
    <script src="<?php echo e(asset('paper')); ?>/js/core/jquery.min.js"></script>
    <script src="<?php echo e(asset('paper')); ?>/js/core/popper.min.js"></script>
    <script src="<?php echo e(asset('paper')); ?>/js/core/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('paper')); ?>/js/plugins/perfect-scrollbar.jquery.min.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo e(asset('paper')); ?>/demo/demo.js"></script>
   
    
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo e(asset('paper')); ?>/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    
 
     <!--   DataTable   -->
    <script src="<?php echo e(asset('DataTables-1.11.3')); ?>/js/jquery.dataTables.min.js" type="text/javascript"></script>

    <!--   SweetAlert   -->
    <script src="<?php echo e(asset('sweetAlert2')); ?>/sweetAlert2.js" type="text/javascript"></script>

    <!--   Mask   -->
    <script src="<?php echo e(asset('mask')); ?>/mask.js" type="text/javascript"></script>
    
    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\projetos\systemcar\resources\views/layouts/app.blade.php ENDPATH**/ ?>