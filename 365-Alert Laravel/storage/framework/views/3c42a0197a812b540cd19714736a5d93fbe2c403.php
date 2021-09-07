<?php $__env->startSection('title', 'Contact'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/contact.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<main>

    <section class="contact_image">
        <div></div>
    </section>
    <h2 id="contact_title">Contact Us</h2>
<?php if(Session::has('message')): ?>
<div class="alert alert-success">
<?php echo e(Session('message')); ?>

</div>
<?php endif; ?>
    <div class="form_container">
        <form action="" method="POST" id="form">
            <?php echo csrf_field(); ?>
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" cols="22" rows="4"></textarea><br>
            <div class="containerSubmit"><input type="submit" name="contact.submit" id="submit_button" value="Send"></div>
        </form>
    </div>

    <section class="images">
        <a href="https://www.inondations.lu/"><img src="<?php echo e(URL::asset('pictures/GOV_Contact_Page.jpg')); ?>" alt="GOV_link" ></a>
        <a href="https://www.meteolux.lu/"><img src="<?php echo e(URL::asset('pictures/MeteoLux_Contact Page.jpg')); ?>" alt="MeteoLux"></a>
        <a href="https://www.meteoalarm.org/en/"><img src="<?php echo e(URL::asset('pictures/MeteoAlarm_Contact_Page.png')); ?>" alt="MeteoAlarm"></a>
        <a href="https://112.public.lu/fr/organisation/administration.html"><img src="<?php echo e(URL::asset('pictures/CGDIS_Contact_Page.jpg')); ?>" alt="CGDIS"></a>
        <a href="https://rss-hydro.lu/"><img src="<?php echo e(URL::asset('pictures/RSS_Contact Page.jpg')); ?>" alt="RSS"></a>
    </section>
</main>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/contact.blade.php ENDPATH**/ ?>