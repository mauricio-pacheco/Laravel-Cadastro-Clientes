<?php $__env->startSection('titulo_pagina'); ?>
Projeto Laravel - Maurício Pacheco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descricao_pagina'); ?>
Projeto Laravel - Maurício Pacheco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rodape_pagina'); ?>
Projeto Laravel - Maurício Pacheco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('listar_usuarios'); ?>

<h3>Gerenciar Usuários</h3>
<hr>
<div style="height: 4px"></div>

   <!-- LISTAR OS USUÁRIOS -->

    <table class="table table-bordered datatable" id="table-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="odd gradeX">
                <td><?php echo e($usuario -> id); ?></td>
                <td><?php echo e($usuario -> nome); ?></td>
                <td><?php echo e($usuario -> email); ?></td>
                <td><a href="<?php echo e(route('usuario', $usuario->id)); ?>">EDITAR</a></td>
                <td><a href="<?php echo e(route('excluir', $usuario->id)); ?>">EXCLUIR</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\Sistemas AgroBella\GitHub\Laravel\loja-laravel\resources\views/gerenciar.blade.php ENDPATH**/ ?>