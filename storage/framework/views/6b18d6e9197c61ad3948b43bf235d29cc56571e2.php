<div class="mt-8 bg-white rounded">
        <div class="w-full max-w-2xl px-6 py-12">

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Name : 
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="block text-gray-600 font-bold"><?php echo e($student->user->name); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Email :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold"><?php echo e($student->user->email); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Family Members :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold"><?php echo e($student->roll_number); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Phone :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold"><?php echo e($student->phone); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Gender :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold"><?php echo e($student->gender); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Date of Birth :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold"><?php echo e($student->dateofbirth); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Barangay :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold"><?php echo e($student->current_address); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Permanent Address :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold"><?php echo e($student->permanent_address); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Terms of conditions :
                    </label>
                </div>
                <div class="md:w-2/3 block text-gray-600 font-bold">
                    <span class="text-gray-600 font-bold"><?php echo e($student->class->class_name); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Admin:
                    </label>
                </div>
                <div class="md:w-2/3 block text-gray-600 font-bold">
                    <span class="text-gray-600 font-bold"><?php echo e($student->parent->user->name); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Email of Admin :
                    </label>
                </div>
                <div class="md:w-2/3 block text-gray-600 font-bold">
                    <span class="text-gray-600 font-bold"><?php echo e($student->parent->user->email); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Emergency Phone Number :
                    </label>
                </div>
                <div class="md:w-2/3 block text-gray-600 font-bold">
                    <span class="text-gray-600 font-bold"><?php echo e($student->parent->phone); ?></span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                       Place  :
                    </label>
                </div>
                <div class="md:w-2/3 block text-gray-600 font-bold">
                    <span class="text-gray-600 font-bold"><?php echo e($student->parent->current_address); ?></span>
                </div>
            </div>

            
                <?php $__currentLoopData = $student->class->subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-center justify-between border border-gray-200 -mb-px">
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($subject->subject_code); ?></div>
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($subject->name); ?></div>
                        <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-medium"><?php echo e($subject->teacher->user->name); ?></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

          
                <?php $__currentLoopData = $student->attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="flex items-center justify-between border border-gray-200 -mb-px">
                        <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($attendance->attendence_date); ?></div>
                        <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($attendance->class->class_name); ?></div>
                        <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium"><?php echo e($attendance->teacher->user->name); ?></div>
                        <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-medium">
                            <?php if($attendance->attendence_status): ?>
                                <span class="text-xs text-white bg-green-500 px-2 py-1 rounded">P</span>
                            <?php else: ?>
                                <span class="text-xs text-white bg-red-500 px-2 py-1 rounded">A</span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>        
    </div><?php /**PATH C:\xampp\htdocs\AMS-LARAVEL\resources\views/dashboard/student.blade.php ENDPATH**/ ?>