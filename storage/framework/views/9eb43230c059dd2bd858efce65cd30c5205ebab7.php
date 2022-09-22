<?php $__env->startSection('titulo'); ?>
    Página principal
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    Contenido principal
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/principal.blade.php ENDPATH**/ ?>