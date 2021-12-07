<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Laracasts Voting</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>
<body class="font-sans bg-rose-background text-gray-900 text-sm">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="https://sonamdatok.me/" target="_blank"><img src="<?php echo e(asset('img/SDpurplogo.png')); ?>" alt="logo"></a>
        <div class="flex items-center">
            <?php if(Route::has('login')): ?>
            <div class="px-6 py-4">
                <?php if(auth()->guard()->check()): ?>
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <?php echo e(__('Log Out')); ?>

                    </a>
                </form>
                <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                <?php if(Route::has('register')): ?>
                <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>


            <a href="#">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>

    <main class="container mx-auto max-w-custom flex" style="max-width:1000px">
        <div class="w-70 mr-5">
            Add idea form goes here. Est ut labore non mollit reprehenderit enim culpa aliquip sunt laborum reprehenderit ut Lorem esse. Voluptate anim occaecat est labore veniam nostrud sint et veniam nostrud. Est minim ad incididunt culpa esse enim nulla. Deserunt tempor qui non do sint pariatur irure velit. Veniam veniam ea pariatur adipisicing cillum exercitation fugiat proident sit amet.
        </div>

        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="#" class="border-b-4 pb-3 border-pink">All Ideas (87)</a></li>
                    <li><a href="#" class="text-gray-100 transition duration-150 ease-in border-b-4 pb-3 hover:border-pink">Considering (6)</a></li>
                    <li><a href="#" class="text-gray-100 transition duration-150 ease-in border-b-4 pb-3 hover:border-pink">In Progress (1)</a></li>
                </ul>

                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li><a href="#" class="text-gray-100 transition duration-150 ease-in border-b-4 pb-3 hover:border-pink">Implemented (10)</a></li>
                    <li><a href="#" class="text-gray-100 transition duration-150 ease-in border-b-4 pb-3 hover:border-pink">Closed (55)</a></li>
                </ul>
            </nav>

            <div class="mt-8">
                <?php echo e($slot); ?>

            </div>

        </div>

    </main>

</body>
</html>
<?php /**PATH C:\Users\ninja\development\votingsite\resources\views/layouts/app.blade.php ENDPATH**/ ?>