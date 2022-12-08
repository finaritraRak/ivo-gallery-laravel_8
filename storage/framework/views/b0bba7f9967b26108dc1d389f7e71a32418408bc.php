<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    
    <!-- Styles -->
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">
     <style>
      .gradient {
        background: linear-gradient(300deg,deepskyblue,blue);
        animation: gradient-animation 18s ease infinite;
      }
      @keyframes  gradient-animation {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}
    </style>
</head>
<body class="leading-normal tracking-normal">
    <div id="app">
        <header class="bg-800 py-6 gradient">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="<?php echo e(url('/')); ?>" class="text-lg font-semibold text-gray-100 no-underline">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    <a class="no-underline hover:underline" href="/">Home</a>
                    <a class="no-underline hover:underline" href="/blog">Blog</a>
                     <a class="no-underline hover:underline" href="/gallery">Gallery</a>
                    <?php if(auth()->guard()->guest()): ?>
                        <a class="no-underline hover:underline" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        <?php if(Route::has('register')): ?>
                            <a class="no-underline hover:underline" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        <?php endif; ?>
                    <?php else: ?>
                        <span><a class="no-underline hover:underline" href="/profile"><?php echo e(Auth::user()->name); ?></a></span>

                        <a href="<?php echo e(route('logout')); ?>"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    <?php endif; ?>
                </nav>
            </div>
        </header>

        <div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <div>
            <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\programme\laragon\www\ivo\resources\views/layouts/app.blade.php ENDPATH**/ ?>