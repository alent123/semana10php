

<?php $__env->startSection('title', 'Registro de Videojuego'); ?>

<?php $__env->startSection('content'); ?>
    <h2>Formulario de Registro de Videojuego</h2>
    <form action="">
        Nombre del juego: <input type="text" name="nombre"><br>
        Precio: <input type="number" name="precio"><br>
        Stock: <input type="number" name="stock"><br>
        Categoría: <input type="text" name="categoria"><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\santi\Music\semana11php\miapp\resources\views/games/create.blade.php ENDPATH**/ ?>