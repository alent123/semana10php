<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games</title>
</head>
<body>
    <h1>Videojuegos</h1>
    <?php if($category): ?>
        <h3>
            Bienvenido a la página del juego <?php echo e($game); ?> que pertenece a la categoría <?php echo e($category); ?>

        </h3>
    <?php else: ?>
        <h3>
            Bienvenido a la página del juego <?php echo e($game); ?>

        </h3>
    <?php endif; ?>
    <h4>La fecha actual es <?php echo e($date); ?></h4>
</body>
</html>
<?php /**PATH C:\Users\santi\Music\semana11php\miapp\resources\views/games/show.blade.php ENDPATH**/ ?>