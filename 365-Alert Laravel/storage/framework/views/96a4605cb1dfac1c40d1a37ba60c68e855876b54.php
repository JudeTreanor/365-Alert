



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
                <?php if($a->type === 'Extreme Danger'): ?>
                    <div class="extreme_danger_sidebar" id="sidebar_color"></div>
                    <div class="extreme_danger_icon" id="alert_icon"></div>
                <?php elseif($a->type === 'Danger'): ?>
                    <div class="danger_sidebar" id="sidebar_color"></div>
                    <div class="danger_icon" id="alert_icon"></div>
                <?php elseif($a->type === 'Potential Danger'): ?>
                    <div class="potential_danger_sidebar" id="sidebar_color"></div>
                    <div class="potential_danger_icon" id="alert_icon"></div>
                <?php elseif($a->type === 'Low Danger'): ?>
                    <div class="low_danger_sidebar" id="sidebar_color"></div>
                    <div class="low_danger_icon" id="alert_icon"></div>
                <?php elseif($a->type === 'Dried Up River'): ?>
                    <div class="dried_up_sidebar" id="sidebar_color"></div>
                    <div class="dried_up_icon" id="alert_icon"></div>
                <?php endif; ?>
                <div class="alert">
                    <h4 id="location"><?php echo e($a->location); ?></h4>
                    <p id="alert_type"><?php echo e($a->type); ?></p>
                    <p id="description">The flood alert is in <?php echo e($a->description); ?> status.</p>
                    <p id="river">River <?php echo e($a->river); ?></p>
                    <p id="water_level">Water Level: <?php echo e($a->water_level . " cm"); ?></p>
                    <p id="updated"><?php echo e($a->updated_at); ?></p>
                    <a href="<?php echo e(route('add-alert', ['alert_id' => $a->id])); ?>" class="buttons_container">
                        <button class="buttons_container" type="submit">Add To List</button>
                    </a>
                </div>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/home.blade.php ENDPATH**/ ?>