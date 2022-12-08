
<?php $__env->startSection('content'); ?>
  <section class="bg-white border-b py-8">
    
      <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
          Gallery
        </h2>
        <div class="w-full mb-4">
          <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>




:<?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

     <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
          <img height="20px" class="p-8 rounded-t-lg" src="/storage/files/<?php echo e($file->file); ?>" alt="product image" />
          <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">

            <div class="flex items-center space-x-4">
    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="">
    <div class="font-medium dark:text-white">
        <div> <?php echo e($file->user); ?></div>
        <div class="text-sm text-gray-500 dark:text-gray-400">Crée le <?php echo e($file->created_at); ?></div>
    </div>
</div>

            <a href="#" class="flex flex-wrap no-underline hover:no-underline">
              <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                Categorie: <?php echo e($file->category); ?>

              </p>
              <div class="w-full font-bold text-xl text-gray-800 px-6">
               <?php echo e($file->titre); ?>

              </div>
              <p class="text-gray-800 text-base px-6 mb-5">
               <?php echo e($file->description); ?>

              </p>
            </a>
          </div>
          <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
            <div class="flex items-center justify-start">
             <!-- <button class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                Action
              </button>-->
            </div>
          </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  



       



    </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\programme\laragon\www\ivo\resources\views/Pages/gallery.blade.php ENDPATH**/ ?>