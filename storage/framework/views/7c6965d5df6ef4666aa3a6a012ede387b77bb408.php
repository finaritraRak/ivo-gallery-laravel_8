
<?php $__env->startSection('title'); ?>
    Catégories
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  


     <section class="container mx-auto p-6 font-mono">
      <a href="addcategory" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ajouter</a>
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
   


    <div class="w-full overflow-x-auto pt-6">
     
      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <th class="px-4 py-3">id</th>
            <th class="px-4 py-3">nom category</th>
            <th class="px-4 py-3">Action</th>
          </tr>
        </thead>
        <tbody class="bg-white">
             <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          
          
          
          
          
          <tr class="text-gray-700">
            <td class="px-4 py-3 border">
              <div class="flex items-center text-sm">
                <div class="relative w-8 h-8 mr-3 rounded-full">
                <!--  <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />-->
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <p class="font-semibold"><?php echo e($category->id); ?></p>
                  <!--<p class="text-xs text-gray-600">Developer</p>-->
                </div>
              </div>
            </td>
            <td class="px-4 py-3 border text-md font-semibold"><?php echo e($category->category_name); ?></td>
            <td class="px-4 py-3 border text-xs">
              <button onclick="window.location ='<?php echo e(url('/editcategory/' . $category->id)); ?>'" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Edit
              </button>
              <a class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded"
                                                href="<?php echo e(url('/deletecategory/' . $category->id)); ?>"
                                                id="delete">delete</a>
            </td>
          
          </tr>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</section>                        

    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('scripts'); ?>
        <script src="admin/js/data-table.js"></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\programme\laragon\www\ivo\resources\views/admin/categories.blade.php ENDPATH**/ ?>