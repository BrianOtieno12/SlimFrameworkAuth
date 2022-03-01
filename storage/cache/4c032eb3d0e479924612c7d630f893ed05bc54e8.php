

<?php $__env->startSection('content'); ?>
    <div style="padding: 10px">
        <p>
            <?php echo e($name); ?> Git Hub Repo
        </p>

        <p>
            App Name is: <?php echo e(env('NO_VALUE', 'Defaulted to me')); ?>

        </p>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Projects\SlimFrameworkAuth\resources\views/auth/home.blade.php ENDPATH**/ ?>