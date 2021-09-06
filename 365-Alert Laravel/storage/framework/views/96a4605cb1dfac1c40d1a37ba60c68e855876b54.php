



<?php $__env->startSection('title', 'Home'); ?>


<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/home.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<section class="flood-map">
    <h1>Luxembourg Flood Map</h1>
</section>
<section class="flex_container">
    <article class="map_image">
        <img src="<?php echo e(URL::asset('pictures/Map_Vector_Blue-01.png')); ?>" alt="luxembourg_map">
    </article>
    <article class="map_main_container" >
        <div class="map_details_container">
            <h2>Locations</h2>
            <ol id="locations_list">
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
        </div>
        <div class="level_description">
            <h3>Levels</h3>
            <ul id="levels_list" >
                <li><div id="red_circle"></div>Extreme Danger</li>
                <li><div id="orange_circle"></div>Danger</li>
                <li><div id="yellow_circle"></div>Potential Danger</li>
                <li><div id="green_circle"></div>Low Danger</li>
                <li><div id="brown_circle"></div>Dry</li>
            </ul>
        </div>
    </article>
</section>
<h2 class="alerts_title">My Alerts</h2>
<section>
    <?php $__currentLoopData = $alerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $alert; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="alert_container">
                <div class="extreme_danger_sidebar" id="sidebar_color"></div>
                <div class="extreme_danger_icon" id="alert_icon"></div>
                
                <div class="alert">
                    <h4 id="location"><?php echo e($a->location); ?></h4>
                    <p id="alert_type"><?php echo e($a->type); ?></p>
                    <p id="description">The flood alert is in <?php echo e($a->description); ?> status.</p>
                    <p id="river">River <?php echo e($a->river); ?></p>
                    <p id="water_level">Water Level: <?php echo e($a->water_level . " cm"); ?></p>
                    <p id="updated"><?php echo e($a->updated_at); ?></p>
                </div>
            </section>
            </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<h2 class="need-help">Need Help?</h2>
<section  class="help_container">
    <img src="<?php echo e(URL::asset('pictures/CGDIS_3_copie.jpg')); ?>" id="image_cgdis" alt="help">
    <article id="icons_container">
        <a href="tel">
            <div>
                <img src="<?php echo e(URL::asset('pictures/CGDIS_112_White.SVG')); ?>" id="icon_number" alt="help">
                <p id="number_112">112</p>
            </div>
        </a>
        <a href="WWW.112.PUBLIC.LU">
            <div>
                <img src="<?php echo e(URL::asset('pictures/CGDIS_Website_White.SVG')); ?>" id="icon_website" alt="help">
                <p id="website"><a href="url" style="color:white">www.112.public.lu</a></p>
            </div>
        </a>
        <div>
            <img src="<?php echo e(URL::asset('pictures/CGDIS_APP_White.SVG')); ?>" id="icon_app" alt="help">
            <p id="gov_app">GOUVALERT</p>
        </div>
    </article>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/home.blade.php ENDPATH**/ ?>