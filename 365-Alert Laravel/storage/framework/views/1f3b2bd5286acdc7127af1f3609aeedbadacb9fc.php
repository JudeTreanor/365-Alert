



<?php $__env->startSection('title', 'Alerts'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/alerts.css')); ?>">
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
<h2 class="alerts_title">Alerts</h2>
<section>
    <?php $__currentLoopData = $alerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="alert_container">
        <?php if($alert->type === 'Extreme Danger'): ?>
            <div class="extreme_danger_sidebar" id="sidebar_color"></div>
            <div class="extreme_danger_icon" id="alert_icon"></div>
        <?php elseif($alert->type === 'Danger'): ?>
            <div class="danger_sidebar" id="sidebar_color"></div>
            <div class="danger_icon" id="alert_icon"></div>
        <?php elseif($alert->type === 'Potential Danger'): ?>
            <div class="potential_danger_sidebar" id="sidebar_color"></div>
            <div class="potential_danger_icon" id="alert_icon"></div>
        <?php elseif($alert->type === 'Low Danger'): ?>
            <div class="low_danger_sidebar" id="sidebar_color"></div>
            <div class="low_danger_icon" id="alert_icon"></div>
        <?php elseif($alert->type === 'Dried Up River'): ?>
            <div class="dried_up_sidebar" id="sidebar_color"></div>
            <div class="dried_up_icon" id="alert_icon"></div>
        <?php endif; ?>
        <div class="alert">
            <h4 id="location"><?php echo e($alert->location); ?></h4>
            <p id="alert_type"><?php echo e($alert->type); ?></p>
            <p id="description">The flood alert is in <?php echo e($alert->description); ?> status.</p>
            <p id="river">River <?php echo e($alert->river); ?></p>
            <p id="water_level">Water Level: <?php echo e($alert->water_level . " cm"); ?></p>
            <p id="updated"><?php echo e($alert->updated_at); ?></p>
            <div id="flex_buttons">
                <a style="text-decoration:none" href="<?php echo e(route('add-alert', ['alert_id' => $alert->id])); ?>" class="buttons_container">
                    <button type="submit" id="button_hover">Add To List</button>
                </a>
                <a href="<?php echo e(route('procedures')); ?>" class="buttons_container"><button id="button_hover">Procedures</button></a>
            </div>
        </div>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/alerts.blade.php ENDPATH**/ ?>