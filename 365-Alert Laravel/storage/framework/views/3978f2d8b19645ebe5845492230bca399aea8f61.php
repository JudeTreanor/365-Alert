



<?php $__env->startSection('title', 'Register'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/register.css')); ?>">
<?php $__env->stopSection(); ?>
<body>



<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('css/login.css')); ?>">
<img src="<?php echo e(URL::asset('../css/logos/house.svg')); ?>" alt="">
<h3>Register</h3>


<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form action="" method="post" id="register" >
    <!-- Security token for Laravel : Mandatory in forms -->
    <?php echo csrf_field(); ?>
    <input type="text" name="username" placeholder="Username" class="input-username"><br>
    <input type="email" name="email" placeholder="Email" class="input-email"><br>
    <input type="password" name="password" placeholder="Password" class="input-password" ><br>
    <input type="password" name="password_confirmation" placeholder="Confirm password" class="input-password"><br>
    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
    <input type="number" name="contact" placeholder="Phone number"class="input-phone"><br>

    <div id="checkbox">
    <input type="checkbox" name="checkbox" value="check" id="agree" />
    <p> I have read and accept the <span><a href="terms"> Terms and Conditions</a></span></p>
    </div>
    <input type="submit" value="Register" id="submit">

</form>
<div id="log">
    <p>Already a member?<span><a href="login">Login Here  </a></span></p>
</div>
<?php $__env->stopSection(); ?>

</body>



<?php $__env->startSection('footer'); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/register.blade.php ENDPATH**/ ?>