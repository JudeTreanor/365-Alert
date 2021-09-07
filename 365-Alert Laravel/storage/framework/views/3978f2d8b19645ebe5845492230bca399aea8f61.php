



<?php $__env->startSection('title', 'Register'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/register.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/login.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<img src="<?php echo e(URL::asset('../css/logos/house.svg')); ?>" class="icon_365" alt="">
<h3>Sign up</h3>



<form  action="" method="post" id="register" >
    <!-- Security token for Laravel : Mandatory in forms -->
    <?php echo csrf_field(); ?>
    
    <input type="text" name="firstname" placeholder="First name" class="input-first"><br>
    <p><?php echo e($errors->first('firstname')); ?></p>
    <input type="text" name="lastname" placeholder="Last name" class="input-last"><br>
    <p><?php echo e($errors->first('lastname')); ?></p>
    <input type="email" name="email" placeholder="Email" class="input-email"><br>
    <p><?php echo e($errors->first('email')); ?></p>
    <input type="password" name="password" placeholder="Password" class="input-password" ><br>
    <p><?php echo e($errors->first('password')); ?></p>
    <input type="password" name="password_confirmation" placeholder="Confirm password" class="input-password"><br>
    <p><?php echo e($errors->first('password-confirmation')); ?></p>
    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
    <input type="number" name="contact" placeholder="Phone number"class="input-phone"><br>
    <p><?php echo e($errors->first('contact')); ?></p>
    <div class="container_legal">
        <input type="checkbox" name="checkbox" value="check" id="agree" />
        <p>I have read and accept the <span><a href="terms"> Terms and Conditions</a></span></p>
    </div>
    <input type="submit" value="Register" id="submit">
    
</form>
<div id="log">
    <p>Already a member?<span><a href="login">Login Here</a></span></p>
</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/register.blade.php ENDPATH**/ ?>