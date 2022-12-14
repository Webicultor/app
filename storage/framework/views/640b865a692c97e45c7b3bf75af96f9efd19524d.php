<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DevStagram - <?php echo $__env->yieldContent('titulo'); ?></title>

        <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>

    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">DevStagram</h1>
                <nav class="flex gap-2 items-center">
                    <a href="<?php echo e(route('login')); ?>" class="font-bold uppercase text-gray-600">Login</a>
                    <a href="<?php echo e(route('register')); ?>" class="font-bold uppercase text-gray-600">Registro</a>
                </nav>
            </div>

        </header>

        <main class="container mx-auto mt-10">
            <h2 class="font-black text-center text-3xl mb-10"><?php echo $__env->yieldContent('titulo'); ?></h2>
            <?php echo $__env->yieldContent('contenido'); ?>
        </main>

        <footer class="text-center text-gray-500 font-bold uppercase mt-10">
            DevStagram - (c) <?php echo e(now()->year); ?>

        </footer>
    </body>
</html><?php /**PATH /var/www/html/resources/views/layouts/app.blade.php ENDPATH**/ ?>