<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
       
    </div>
</div>

<div class="w-full block mt-4 sm:mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <?php $__currentLoopData = $parents->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $children): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="w-full bg-gray-200 text-center border border-gray-300 rounded px-8 py-6 mb-4 <?php echo e(($key>=1) ? 'ml-0 sm:ml-2' : ''); ?> <?php echo e(($parents->children_count===1) ? 'sm:max-w-sm' : ''); ?>">
                <div class="text-gray-700 font-bold">
                    <div class="mb-6">
                        <div class="text-lg uppercase"><?php echo e($children->user->name); ?></div>
                        <div class="text-sm lowercase leading-tight"><?php echo e($children->user->email); ?></div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Choose Emergency :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->class->class_name); ?></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Family Member :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->roll_number); ?></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Phone :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->phone); ?></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Gender :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->gender); ?></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Date of Birth :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->dateofbirth); ?></div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="w-1/2 text-sm text-right">Barangay :</div>
                        <div class="w-1/2 text-sm text-left ml-2"><?php echo e($children->current_address); ?></div>
                    </div>

                    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div> <?php /**PATH C:\xampp\htdocs\AMS-LARAVEL\resources\views/dashboard/parents.blade.php ENDPATH**/ ?>