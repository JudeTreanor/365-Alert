



<?php $__env->startSection('title', 'Alerts'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/alerts.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<section class="flood-map">
    <h1>Luxembourg Flood Map</h1>
    <div class="map">
        <img src="<?php echo e(URL::asset('pictures/Map2.PNG')); ?>" alt="">
    </div>
</section>
<h2 class="alerts_title">Alerts</h2>
<section>
    <?php $__currentLoopData = $alerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="alert_container">
        <div id="sidebar_color"></div>
        <img src="<?php echo e(URL::asset('pictures/Alert_Warning_Red.svg')); ?>" alt="">
        <div class="alert">
            <h3 id="location"><?php echo e($alert->location); ?></h3>
            <p id="alert_type"><?php echo e($alert->type); ?></p>
            <p id="description">Description <?php echo e($alert->description); ?></p>
            <p id="river">River: <?php echo e($alert->river); ?></p>
            <p id="water_level">Water Level: <?php echo e($alert->water_level . " cm"); ?></p>
            <p id="updated">Last updated: <?php echo e($alert->updated_at); ?></p>
            <a href="<?php echo e(route('add-alert', ['user_id'=> Auth::user()->id , 'alert_id' => $alert->id ])); ?>">
                <button type="submit">Add To List</button>
            </a>
        </div>
        
    </article>
    
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
    <script>
        $(function (){
            $('form').submit(function(e) {
                e.preventDefault();

                // AJAX call
                $.ajax({
                    url: 'AlertsController.php',
                    method: 'post',
                    data: $("form").serialize(),
                    dataType: 'json'
                })

                .done(function(result){
                    console.log(result);
                })
                .fail(function(result) {
                        console.log('AJAX FAILED');
                })
            })
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/alerts.blade.php ENDPATH**/ ?>