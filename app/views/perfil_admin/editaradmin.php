<?php  require_once "indexperfil.php";
session_start();
?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner" class="container">


            <div class="ui text container form-sobre-fotos" >
                <div class="ui text container centered aligned">
                    <h1><label><font color="#363636">Editar cadastro</font> </h1>
                </div><br>

                <!--formulario de cadastro -->
                <form class="ui form" action="?acao=editarAdmin" method="post">

                    <div class="field">
                        <label><font color="#363636">Nome Completo</font></label>
                        <input type="text" name="nome" value="<?= $admin->getNome(); ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Endereço de email</font></label>
                        <input type="text" name="email" value="<?= $admin->getEmail(); ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">CNPJ</font></label>
                        <input type="text" name="cnpj" value="<?= $admin->cnpj; ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Telefone</font></label>
                        <input type="text" name="telefone" value="<?= $admin->getTelefone(); ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Razão social</font></label>
                        <input type="text" name="razao_social" value="<?= $admin->razao_social; ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Nome fantasia</font></label>
                        <input type="text" name="nome_fantasia" value="<?= $admin->nome_fantasia; ?>">
                    </div>
                    <div class="field">
                        <label><font color="#363636">Senha</font></label>
                        <input type="text" name="senha" value="<?= $admin->getSenha(); ?>">

                        <input type="hidden" value="<?= $admin->getIdUsuario(); ?>" name="idusu"><br>
                        <input  type="submit" name="enviar" onclick="return confirm('Usuário editado com sucesso!');">
                    </div>
                </form>

            </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

<?php require_once "rodape.php"; ?>