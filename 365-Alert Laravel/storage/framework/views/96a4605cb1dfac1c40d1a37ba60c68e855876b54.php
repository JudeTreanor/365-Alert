




<?php $__env->startSection('title', 'Home'); ?>


<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/home.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<section class="flood-map">
    <h2>Luxembourg Flood Map</h2>
</section>

<section class="my-alerts">
    <div class="icon-block icon-alert-red">
        <div class="red-alert">
            <h3>Echternach</h3>
            <br>
            <p>Extreme Danger</p>
            <p>The flood predicition center is in</p>
        </div>
        <div class="red-buttons">
            <button type="submit">Water Chart</button>
            <button type="submit">Comments</button>
            <button type="submit">Add To List</button>
        </div>
    </div>


    <!-- <section class="my-alerts">
    <h2>My Alerts</h2>
    <article class="alert">
        <img id="danger" src="../pictures/Alert_Warning_Red.svg" alt="">
        <div class="red-alert">
            <h3>Echternach</h3>
            <br>
            <p>Extreme Danger</p>
            <p>The flood predicition center is in</p>
        </div>
        <div class="red-buttons">
            <button type="submit">Water Chart</button>
            <button type="submit">Comments</button>
            <button type="submit">Add To List</button>
        </div>
    </article>
</section> -->

    <h2>My Alerts</h2>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/home.blade.php ENDPATH**/ ?>