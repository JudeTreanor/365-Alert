



<?php $__env->startSection('title', 'Procedures'); ?>


<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/procedures.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<main>
    <section class="emergency">
        <div id="emergency">
            <img src="<?php echo e(URL::asset('pictures/Emergency.jpg')); ?>" alt="">
        </div>
    </section>

    <section class="danger">
        <div id="danger">
            <h2>Danger levels</h2>
            <br>
            <p>Permanent provision of measured water levels
                and forecasts of watercourses in Luxembourg,
                as well as additional information during flood
                warning times.</p>
        </div>

        <div class="icon-block icon-alert-red">
            <h3>Extreme danger</h3>
            <br>
            <p>The flood prediction center is in alert
                status. Flood reports are updated at
                least once a day or in case of a change
                of situation. Water levels are updated
                up to every 15 minutes.</p>
        </div>
    </section>
</main>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/procedures.blade.php ENDPATH**/ ?>