



<?php $__env->startSection('title', 'About'); ?>


<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/about.css')); ?>">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<h1 id="about_us_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nesciunt totam modi repudiandae error sunt ex ullam numquam nobis quia, harum pariatur corrupti reprehenderit, sequi laudantium assumenda eos itaque mollitia!</h1>
<h2 id="contact_title">About Us</h2>
<article class="about_team">
    <section class="about">
        <img src="<?php echo e(URL::asset('pictures/About_Alex.jpg')); ?>" alt="photo_alex">
        <h2 id="name">Alexandru Darii</h2>
        <h3 id="title">Junior Web Developer</h3>
        <h4 id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quia velit quos reiciendis doloribus. Tenetur soluta, exercitationem, eveniet veniam dolorem ea vero repudiandae voluptas placeat, suscipit sed necessitatibus dignissimos dolor!</h4>
        <a href="https://www.linkedin.com/in/alexandru-darii/"></a><img id="linkedin" src="<?php echo e(URL::asset('pictures/About_Linkedin.svg')); ?>" alt="">
    </section>
    <section class="about">
        <img src="<?php echo e(URL::asset('pictures/About_Diogo.jpg')); ?>" alt="photo_diogo">
        <h2 id="name">Diogo Cordas</h2>
        <h3 id="title">Junior Web Developer</h3>
        <h4 id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quia velit quos reiciendis doloribus. Tenetur soluta, exercitationem, eveniet veniam dolorem ea vero repudiandae voluptas placeat, suscipit sed necessitatibus dignissimos dolor!</h4>
        <a href="https://www.linkedin.com/in/diogo-cordas/"></a><img id="linkedin" src="<?php echo e(URL::asset('pictures/About_Linkedin.svg')); ?>" alt="">
    </section>
    <section class="about">
        <img src="<?php echo e(URL::asset('pictures/About_Elsa.jpg')); ?>" alt="photo_elsa">
        <h2 id="name">Elsa Ribeiro</h2>
        <h3 id="title">Junior Web Developer</h3>
        <h4 id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quia velit quos reiciendis doloribus. Tenetur soluta, exercitationem, eveniet veniam dolorem ea vero repudiandae voluptas placeat, suscipit sed necessitatibus dignissimos dolor!</h4>
        <a href="https://www.linkedin.com/in/elsafreitasribeiro/"></a><img id="linkedin" src="<?php echo e(URL::asset('pictures/About_Linkedin.svg')); ?>" alt="">
    </section>
    <section class="about">
        <img src="<?php echo e(URL::asset('pictures/About_John.jpg')); ?>" alt="photo_john">
        <h2 id="name">John Olivier</h2>
        <h3 id="title">Junior Web Developer</h3>
        <h4 id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quia velit quos reiciendis doloribus. Tenetur soluta, exercitationem, eveniet veniam dolorem ea vero repudiandae voluptas placeat, suscipit sed necessitatibus dignissimos dolor!</h4>
        <a href="https://www.linkedin.com/in/john-olivier-maia/"></a><img id="linkedin" src="<?php echo e(URL::asset('pictures/About_Linkedin.svg')); ?>" alt="">
    </section>
    <section class="about">
        <img src="<?php echo e(URL::asset('pictures/About - Web Dev Main.jpg')); ?>" alt="photo_jude">
        <h2 id="name">Jude Treanor</h2>
        <h3 id="title">Junior Web Developer</h3>
        <h4 id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quia velit quos reiciendis doloribus. Tenetur soluta, exercitationem, eveniet veniam dolorem ea vero repudiandae voluptas placeat, suscipit sed necessitatibus dignissimos dolor!</h4>
        <a href="https://www.linkedin.com/in/jude-treanor/"></a><img id="linkedin" src="<?php echo e(URL::asset('pictures/About_Linkedin.svg')); ?>" alt="">
    </section>
</article>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simpletemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/about.blade.php ENDPATH**/ ?>