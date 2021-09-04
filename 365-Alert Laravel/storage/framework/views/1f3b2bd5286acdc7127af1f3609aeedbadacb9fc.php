



<?php $__env->startSection('title', 'Alerts'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/alerts.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<section class="flood-map">
    <h1>Luxembourg Flood Map</h1>
    <article class="map">
        <img src="<?php echo e(URL::asset('pictures/Map_Vector_Blue-01.PNG')); ?>" alt="">
    </article>
</section>
<section class="map_main_container" >
    <article class="map_details_container">
        <h2>Locations</h2>
        <ol>
            <li>Bigonville</li>
            <li>Bissen</li>
            <li>Bollendorf</li>
            <li>Diekirch</li>
            <li>Ettelbrück</li>
            <li>Ettelbrück</li>
            <li>Hesperange</li>
            <li>Hunnebuer</li>
            <li>Mersch</li>
            <li>Pfaffenthal</li>
            <li>Reichlange</li>
            <li>Stadtbredimus</li>
            <li>Steinsel</li>
        </ol>
    </article>
    <article class="level_description">
        <h3>Levels</h3>
        <ul>
            <li><div id="red_circle"></div>Extreme Danger</li>
            <li><div id="orange_circle"></div>Danger</li>
            <li><div id="yellow_circle"></div>Potential Danger</li>
            <li><div id="green_circle"></div>Low Danger</li>
            <li><div id="brown_circle"></div>Dry</li>
        </ul>
    </article>   
</section>
<h2 class="alerts_title">Alerts</h2>
<section>
    <?php $__currentLoopData = $alerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="alert_container">
        <div class="extreme_danger_sidebar" id="sidebar_color"></div>
        <div class="extreme_danger_icon" id="alert_icon"></div>
        
        <div class="alert">
            <h4 id="location"><?php echo e($alert->location); ?></h4>
            <p id="alert_type"><?php echo e($alert->type); ?></p>
            <p id="description">The flood alert is in <?php echo e($alert->description); ?> status.</p>
            <p id="river">River <?php echo e($alert->river); ?></p>
            <p id="water_level">Water Level: <?php echo e($alert->water_level . " cm"); ?></p>
            <p id="updated"><?php echo e($alert->updated_at); ?></p>
            <a href="<?php echo e(route('add-alert', ['alert_id' => $alert->id])); ?>">
                <button class="buttons_container" type="submit">Add To List</button>
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