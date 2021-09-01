



<?php $__env->startSection('title', 'Admin'); ?>


<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <h1 id="section-title">Users</h1>
    <section id="users-list">
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <article id="user-article">    
            <div id="names">
                <p class="label">First Name</p>
                <p class="user-data"><?php echo e($user->firstname); ?></p>
                <p class="label">Last Name</p>
                <p class="user-data"><?php echo e($user->lastname); ?></p>
            </div>
            <div id="contact">
                <p class="label">Email</p>
                <p class="user-data"><?php echo e($user->email); ?></p>
                <p class="label">Passwrod</p>
                <p class="user-data"><?php echo e($user->password); ?></p>
                <p class="label">Phone Number</p>
                <p class="user-data"><?php echo e($user->contact); ?></p>
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