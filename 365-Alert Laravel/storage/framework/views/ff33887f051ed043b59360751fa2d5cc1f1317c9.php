



<?php $__env->startSection('title', 'Admin'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h1 id="section-title">Users</h1>
    <section id="users-list">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <article id="user-article">    
            <div id="user-details">
                <p class="label">First Name</p>
                <p class="user-data"><?php echo e($user->firstname); ?></p>
                <p class="label">Last Name</p>
                <p class="user-data"><?php echo e($user->lastname); ?></p>
                <p class="label">Email</p>
                <p class="user-data"><?php echo e($user->email); ?></p>
                
                <p class="label">Phone Number</p>
                <p class="user-data"><?php echo e($user->contact); ?></p>
            </div>
            <div id="buttons_cont">
                <a href="<?php echo e(route('edit-user', ['id' => $user->id])); ?>" class="buttons_container">
                    <button class="buttons_container" type="submit">Edit User</button>
                </a><br>
                <a href="<?php echo e(route('delete-user', ['id' => $user->id])); ?>" class="buttons_container">
                    <button class="buttons_container" type="submit">Delete User</button>
                </a>
            </div>
        </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
    <h2 id="alerts-title">Alerts Settings</h2>
    <section id="alerts-list">
        <?php $__currentLoopData = $alerts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alert): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <article class="alert_container">
            <div class="extreme_danger_sidebar" id="sidebar_color"></div>
            <div class="extreme_danger_icon" id="alert_icon"></div>
            <div class="alert">
                <h4 id="location"><?php echo e($alert->location); ?></h4>
                <p id="river">River <?php echo e($alert->river); ?></p>
                <p id="water_level">Water Level: <?php echo e($alert->water_level . " cm"); ?></p>
                <p id="water_level">Water Caution Level: <?php echo e($alert->water_caution_level . " cm"); ?></p>
                <p id="water_level">Water Pre-Alert Level: <?php echo e($alert->water_prealert_level . " cm"); ?></p>
                <p id="water_level">Water Alert Level: <?php echo e($alert->water_alert_level . " cm"); ?></p>
                <p id="updated"><?php echo e($alert->updated_at); ?></p>
                <a href="<?php echo e(route('alert-edit', ['id' => $alert->id])); ?>" class="buttons_container">
                    <button class="buttons_container" type="submit">Edit Alert Settings</button>
                </a>
            </div>
        </article>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/admin.blade.php ENDPATH**/ ?>