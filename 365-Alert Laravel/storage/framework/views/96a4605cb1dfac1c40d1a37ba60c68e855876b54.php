



<?php $__env->startSection('title', 'Home'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/home.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h1>THIS IS OUR HOME</h1>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/home.blade.php ENDPATH**/ ?>