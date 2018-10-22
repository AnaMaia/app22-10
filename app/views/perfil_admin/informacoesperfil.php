<?php require_once "indexperfil.php"; ?>

<div id="page-wrapper">
    <div id="page-inner" class="container">

        <a class="btn btn-danger" style="background-color: #ba2a1d" href="http://localhost/tcc/app/controllers/admin_controller.php?acao=excluir&id_usuario=<?= $_SESSION['id_user'];?>"onclick="return confirm('Tem certeza que deseja excluir sua conta?');">Excluir conta</a>
        <a class="btn btn-primary" href="?acao=editarAdmin&id_usuario=<?= $admin->getIdUsuario(); ?>"><i class="fa fa-edit "></i> Editar</a>

        <!-- Page Content -->


        <div class="col-md-6 col-sm-4" style="margin-left: 250px; margin-top: 100px">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    Informações
                </div>
                <div class="panel-footer">
                    Nome: <?= $admin->getNome(); ?>
                </div>

                <div class="panel-footer">
                    Email: <?= $admin->getEmail(); ?>
                </div>

                <div class="panel-footer">
                    Telefone: <?= $admin->getTelefone(); ?>
                </div>

                <div class="panel-footer">
                    CNPJ: <?= $admin->cnpj; ?>
                </div>

                <div class="panel-footer">
                    Razão Social: <?= $admin->razao_social; ?>
                </div>

                <div class="panel-footer">
                    Nome Fantasia: <?= $admin->nome_fantasia; ?>
                </div>

            </div>
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


    <?php require_once "rodape.php"; ?>

