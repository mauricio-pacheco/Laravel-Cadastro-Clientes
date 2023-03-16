<?php $__env->startSection('titulo_pagina'); ?>
Projeto Laravel - Maurício Pacheco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('descricao_pagina'); ?>
Projeto Laravel - Maurício Pacheco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('rodape_pagina'); ?>
Projeto Laravel - Maurício Pacheco
<?php $__env->stopSection(); ?>

<?php $__env->startSection('formulario_cadastro'); ?>

<!-- CADASTRO DE USUÁRIOS -->

<h3>Cadastro de Usuários</h3>
<hr>
<div style="height: 4px"></div>

<div class="row">

    <form action="<?php echo e(route('cadastrar')); ?>" method="post">

    <?php echo csrf_field(); ?>

    <script>
        function SomenteNumero(e){
        var tecla=(window.event)?event.keyCode:e.which;
        if((tecla>47 && tecla<58)) return true;
        else{
        if (tecla==8 || tecla==0) return true;
        else  return false;
        }
        }
    </script>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><input type="text" class="form-control input-lg" name="usuario" id="usuario" data-mask="email" placeholder="Usuário" required></td>
    <td align="center"><div style="width: 2px"></div></td>
    <td align="center">
    <select name="dominio" class="form-control input-lg">
    <option value="@casadaweb.net">@casadaweb.net</option>
    </select></td>
    <td align="center"><div style="width: 2px"></div></td>
    <td align="center">
    <div class="input-group" id="show_hide_password">
    <input class="form-control input-lg" type="password" placeholder="Senha (Letras, Números e 1 Caractere Especial)" name="senha" minlength="12" alt="Senha do Usuário" title="Senha do Usuário" required>
    <div class="input-group-addon">
    <a href=""><i class="entypo-eye" aria-hidden="true"></i></a>
    </div>
    </td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><div style="height: 6px"></div></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center">
    <div class="fileinput fileinput-new" data-provides="fileinput">
    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
    <img src="<?php echo e(asset('assets/images/perfil_cadastro.jpg')); ?>" alt="Clique na Imagem para Alterar o Perfil" title="Clique na Imagem para Alterar o Perfil" >
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail" style="width: 200px; height: 150px;"></div>
    <div>
    <span class="btn btn-white btn-file">
    <span class="fileinput-new">Selecionar imagem</span>
    <span class="fileinput-exists">Alterar</span>
    <input type="file" name="foto_perfil" accept=".jpg">
    </span>
    <a href="#" class="btn btn-red fileinput-exists" data-dismiss="fileinput">Remover</a>
    </div>
    </div>
    </td>
    <td align="center"><div style="width: 2px"></div></td>
    <td align="center" width="99%" valign="top">
    <select name="perfil_usuario" id="perfil_usuario" class="form-control input-lg" required>
    <option value="">Perfil do Usuário</option>
    <option value="1">Administrador</option>
    <option value="2">Usuário</option>
    </select>
    <div style="height: 6px"></div>
    <input type="text" class="form-control input-lg" name="nome" id="nome" placeholder="Nome Completo" required>
    <div style="height: 6px"></div>
    <input type="text" class="form-control input-lg" name="email" id="email" placeholder="E-mail" >
    <div style="height: 6px"></div>
    </td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><div style="height: 6px"></div></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><input type="text" class="form-control input-lg" name="razao_social" id="razao_social" placeholder="Razão Social" ></td>
    <td align="center"><div style="width: 2px"></div></td>
    <td align="center"><input type="text" class="form-control input-lg" name="nome_fantasia" id="nome_fantasia" placeholder="Nome Fantasia" ></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><div style="height: 6px"></div></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><input type="text" class="form-control input-lg" name="endereco" id="endereco" placeholder="Endereço" required></td>
    <td align="center"><div style="width: 2px"></div></td>
    <td align="center"><input type="text" class="form-control input-lg" name="numero" id="numero" placeholder="Número" required></td>
    <td align="center"><div style="width: 2px"></div></td>
    <td align="center"><input type="text" class="form-control input-lg" name="complemento" id="complemento" placeholder="Complemento"></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><div style="height: 6px"></div></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="left">
    <select name="cidade" class="form-control input-lg" data-allow-clear="true" data-placeholder="Selecionar uma cidade...">
    <?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <option value="<?php echo e($cidade -> id); ?>"><?php echo e($cidade -> nome); ?>/<?php echo e($cidade -> uf); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select></td>
    <td align="center"><div style="width: 2px"></div></td>
    <td align="center"><input type="text" class="form-control input-lg" name="cep" onkeypress="return SomenteNumero(event);" id="cep" placeholder="CEP" required /></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><div style="height: 6px"></div></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="left"><input type="number" class="form-control input-lg" name="cpf" id="cpf" placeholder="CNPJ /CPF" onkeypress="return SomenteNumero(event);" required /></td>
    <td align="center"><div style="width: 2px"></div></td>
    <td align="center"><input type="number" class="form-control input-lg" name="ie" id="ie" onkeypress="return SomenteNumero(event);" placeholder="Inscrição Estadual" /></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><div style="height: 6px"></div></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="left"><input type="text" class="form-control input-lg" name="rg" id="rg" placeholder="RG" required /></td>
    <td align="center"><div style="width: 2px"></div></td>
    <td align="center"><input type="text" class="form-control datepicker input-lg" name="data_nascimento" id="data_nascimento" placeholder="Data Nascimento" required></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><div style="height: 6px"></div></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="left"><input type="text" class="form-control input-lg" name="telefone" id="telefone" placeholder="Telefone" /></td>
    <td align="center"><div style="width: 2px"></div></td>
    <td align="center"><input type="text" class="form-control input-lg" name="celular" id="celular" placeholder="Celular" required /></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><div style="height: 6px"></div></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="left"><textarea class="form-control input-lg" name="observacoes" id="observacoes" placeholder="Observações" rows="10"></textarea></td>
    </tr>
    </tbody>
    </table>

    <table width="98%" align="center" border="0" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
    <td align="center"><div style="height: 6px"></div></td>
    </tr>
    </tbody>
    </table>

    <div class="col-md-6">
    <button type="reset" class="btn btn-red btn-block btn-lg" style="width: 100%">LIMPAR FORMULÁRIO</button><div style="height: 6px"></div>
    </div>

    <div class="col-md-6">
    <button type="submit" class="btn btn-blue btn-block btn-lg" id="botao_racas_pequenas" style="width: 100%">CADASTRAR USUÁRIO</button><div style="height: 6px"></div>
    </div>

    </div>

   <?php $__env->stopSection(); ?>

   <?php $__env->startSection('listar_usuarios'); ?>

<div id="app">

    <Home />

</div>

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




<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\loja-laravel\resources\views/index.blade.php ENDPATH**/ ?>