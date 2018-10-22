<?php
@session_start();
$base_url = "http://localhost/tcc";
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Estoque do infinito</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?= $base_url ?>/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= $base_url ?>/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="<?= $base_url ?>/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?= $base_url ?>/assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/assets/semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $base_url ?>/assets/style.css">

</head>
<body>

<div id="wrapper">

    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Leaneth</a>
        </div>





        <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"><a href="http://localhost/tcc/app/crud/login/closed.php" class="btn btn-danger square-btn-adjust">Logout</a></div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">


        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?= $base_url ?>/assets/images/logo%20Estoque.png" class="img-responsive" alt="Responsive image">
                </li>

                <li>
                    <a class="active-menu"  href="http://localhost/tcc/app/controllers/produto_controller.php?acao=listar"><i class="fa fa-desktop fa-3x"></i>Catálogo</a>
                    <!-- <a class="active-menu"  href="http://localhost/tcc/app/controllers/admin_controller.php?acao=listarAdmin&idAdministrador=<?php $administrador->idAdministrador; ?>"><i class="fa fa-desktop fa-3x"></i>Catálogo</a> -->
                </li>
                <li>
                    <a href="http://localhost/tcc/app/controllers/admin_controller.php?acao=listarAdmin"><i class="glyphicon glyphicon-user fa-3x" style="margin-right: 10px" aria-hidden="true"></i>Perfil</a>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit fa-3x"></i>Cadastrar<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="http://localhost/tcc/app/controllers/produto_controller.php?acao=cadastrar">Produtos</a>
                        </li>
                        <li>
                            <a href="http://localhost/tcc/app/controllers/cliente1_controller.php?acao=cadastrar">Lojas</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="glyphicon glyphicon-eye-open fa-3x" aria-hidden="true"></i>Visualizar<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                       <!-- <li>
                            <a href="http://localhost/tcc/app/views/perfil_admin/visualizarrelatorios.php">Relatórios</a>
                        </li> -->

                        <li>
                            <a href="http://localhost/tcc/app/controllers/cliente1_controller.php?acao=index">Lojas</a>
                        </li>
                        <li>
                            <!-- <a href="../../controllers/usuario_controller.php?acao=listarVends">Vendedores Cadastrados</a> -->
                            <a href="http://localhost/tcc/app/controllers/vend_controller.php?acao=listar">Vendedores Cadastrados</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="historico.php"><i class="glyphicon glyphicon-folder-close fa-3x" aria-hidden="true"></i> Histórico </a>

                </li>
            </ul>

        </div>

    </nav>
</html>