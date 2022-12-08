

<?php $__env->startSection('content'); ?>
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl">
            <?php echo e($categories->category_name); ?>

        </h1>
    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800"></span>, Created on 
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        <?php echo e($categories->description); ?>

    </p>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\programme\laragon\www\ivo\resources\views/pages/showCategory.blade.php ENDPATH**/ ?>