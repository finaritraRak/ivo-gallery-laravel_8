
<?php $__env->startSection('title'); ?>
  profile Etudiant
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

 
</div>
<br>
<div class="bg-white relative shadow rounded-lg w-5/6 md:w-4/6  lg:w-3/6 xl:w-2/6 mx-auto">
  <form method="POST" enctype="multipart/form-data" id="upload-file" action="<?php echo e(url('store')); ?>"  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
     <?php echo e(csrf_field()); ?>

    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="titre">
        Titre
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="titre" id="titre" type="text" placeholder="titre">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="Description">
        Description
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Description" name="description" type="textarea" placeholder="Description">
     
    </div>

    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
        category
      </label>


      <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="category" id="">
                                    <option value="">select category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($categorie->category_name); ?>"><?php echo e($categorie->category_name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </select>








    </div>
     <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="user" value="<?php echo e(Auth::user()->name); ?>" name="user" type="hidden">
     <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="file">
        Image
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="file" name="file" type="file">
     
    </div>
   
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Upload
      </button>
      <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger mt-1 mb-1"><?php echo e($message); ?></div>
      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\programme\laragon\www\ivo\resources\views/pages/file-upload.blade.php ENDPATH**/ ?>