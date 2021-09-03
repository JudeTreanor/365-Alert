



<?php $__env->startSection('title', 'Contact'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/contact.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<main>
    <section class="contact_image">
        <img src="<?php echo e(URL::asset('pictures/Contact_Page.jpg')); ?>" alt="contact_image">
    </section>
    <h2 id="contact_title">Contact Us</h2>

    <div class="form_container">
        <form action="" method="POST" id="form">
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" cols="22" rows="4"></textarea><br>
            <div class="containerSubmit"><input type="submit" name="submit_button" id="submit_button" value="Send"></div>
        </form>
    </div>

    <section class="images">
        <img src="<?php echo e(URL::asset('pictures/GOV_Contact_Page.jpg')); ?>" alt="GOV_link" >
        <img src="<?php echo e(URL::asset('pictures/MeteoLux_Contact Page.jpg')); ?>" alt="MeteoLux">
        <img src="<?php echo e(URL::asset('pictures/MeteoAlarm_Contact_Page.png')); ?>" alt="MeteoAlarm">
        <img src="<?php echo e(URL::asset('pictures/CGDIS_Contact_Page.jpg')); ?>" alt="CGDIS">
        <img src="<?php echo e(URL::asset('pictures/RSS_Contact Page.jpg')); ?>" alt="RSS">
    </section>
</main>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mytemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/contact.blade.php ENDPATH**/ ?>