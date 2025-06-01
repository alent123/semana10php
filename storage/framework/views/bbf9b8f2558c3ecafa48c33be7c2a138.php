<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Games - <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <h1>Videojuegos</h1>
    <?php echo $__env->yieldContent('content'); ?>
    <?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve(['color' => 'LightSalmon','message' => 'Laboratorio 10'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Alert::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $attributes = $__attributesOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__attributesOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $component = $__componentOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__componentOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginalfe45e406ebcfa46dda3ecb65ecab3c73 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe45e406ebcfa46dda3ecb65ecab3c73 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.links','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('links'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe45e406ebcfa46dda3ecb65ecab3c73)): ?>
<?php $attributes = $__attributesOriginalfe45e406ebcfa46dda3ecb65ecab3c73; ?>
<?php unset($__attributesOriginalfe45e406ebcfa46dda3ecb65ecab3c73); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe45e406ebcfa46dda3ecb65ecab3c73)): ?>
<?php $component = $__componentOriginalfe45e406ebcfa46dda3ecb65ecab3c73; ?>
<?php unset($__componentOriginalfe45e406ebcfa46dda3ecb65ecab3c73); ?>
<?php endif; ?>
    <p>&copy; 2024 - Desarrollo de Aplicaciones en Internet</p>
</body>
</html>
<?php /**PATH C:\Users\santi\Music\semana11php\miapp\resources\views/layouts/layout.blade.php ENDPATH**/ ?>