



<?php $__env->startSection('title', 'Home'); ?>


<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/home.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<section class="flood-map">
    <h2>Luxembourg Flood Map</h2>
    <div class="map">
        <img src="<?php echo e(URL::asset('pictures/Map2.PNG')); ?>" alt="">
    </div>
</section>

<section class="my-alerts">
    <h2>My Alerts</h2>
    <div class="icon-block icon-alert-red">
        <div class="red-alert">
            <h3>Echternach</h3>
            <br>
            <p id="extreme">Extreme Danger</p>
            <p>The flood predicition center is in</p>
        </div>
        <div class="red-buttons">
            <button type="submit">Water Chart</button>
            <button type="submit">Comments</button>
            <button type="submit">Add To List</button>
        </div>
    </div>

    <div class="icon-block icon-alert-orange">
        <div class="orange-alert">
            <h3>Bissen</h3>
            <br>
            <p id="extreme">Danger</p>
            <p>The flood predicition center is in</p>
        </div>
        <div class="orange-buttons">
            <button type="submit">Water Chart</button>
            <button type="submit">Comments</button>
            <button type="submit">Add To List</button>
        </div>
    </div>

    <div class="icon-block icon-alert-yellow">
        <div class="yellow-alert">
            <h3>Bissen</h3>
            <br>
            <p id="extreme">Potential Danger</p>
            <p>The flood predicition center is in</p>
        </div>
        <div class="yellow-buttons">
            <button type="submit">Water Chart</button>
            <button type="submit">Comments</button>
            <button type="submit">Add To List</button>
        </div>
    </div>

</section>
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

<section class="need-help">
    <h2>Need Help?</h2>
    <div class="container">
        <img src="<?php echo e(URL::asset('pictures/CGDIS_3 copie.jpg')); ?>" alt="">
        <div id="bottom-text">
            <div class="bottom-left">112</div>
            <div class="bottom-center"><a href="url" style="color:white">WWW.112.PUBLIC.LU</a></div>
            <div class="bottom-right">GOUVALERT</div>
        </div>
    </div>

</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/home.blade.php ENDPATH**/ ?>