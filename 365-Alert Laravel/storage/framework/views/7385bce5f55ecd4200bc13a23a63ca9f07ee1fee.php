<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/main.css')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
</head>

<body>
    <!-- Header with menu and login/register -->
    <header>

        <img src="<?php echo e(URL::asset('pictures/Menu_Colapsed_white.svg')); ?>" alt="">

        <section>
            <nav>
                <ul class="navigation">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Alert</a></li>
                    <li><a href="#">Measures</a></li>
                </ul>
                <h2>365 Alert</h2>

                <ul id="register">
                    <li><a href="#">Log in</a></li>
                    <li><a href="#">Sign Up</a></li>
                </ul>
            </nav>
        </section>
    </header>

    <main class="content">
        <?php echo $__env->make('layouts.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer>
        <!-- footer section with two divs and logo image -->
        <section>
            <div class="container">
                <ul id="social">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twiiter</a></li>
                </ul>

                <ul id="terms">
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Pricacy</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                </ul>
            </div>

            <div class="logo">
                <h3>Logo</h3>
                <h3>&copy;Alert copyright</h3>
            </div>
        </section>

        <?php echo $__env->yieldContent('footer'); ?>
    </footer>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\GitHub\365-Alert\365-Alert Laravel\resources\views/layouts/mytemplate.blade.php ENDPATH**/ ?>