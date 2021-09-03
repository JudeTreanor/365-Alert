



<?php $__env->startSection('title', 'Login'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/login.css')); ?>">

<?php $__env->stopSection(); ?>
<body>

<main>

<?php $__env->startSection('content'); ?>

<img src="<?php echo e(URL::asset('../css/logos/house.svg')); ?>" alt="">
<h3>Login</h3>

<?php if(session('status')): ?>
    <div class="alert alert-success">
        <?php echo e(session('status')); ?>

    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form action="" method="post">
    <!-- Security token for Laravel : Mandatory in forms -->
    <?php echo csrf_field(); ?>


    <input type="email" name="email" placeholder="email" class="input-email" onfocus="this.placeholder=''"
    onblur="this.placeholder='Email'" >

    <input type="password" name="password" placeholder="Password" class="input-password" ><br>
<p><span><a href="forgot-password">Forgot your password?</a></span></p><br>
    <input type="submit" value="login" id="submit2">
</form>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
</main>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/login.blade.php ENDPATH**/ ?>