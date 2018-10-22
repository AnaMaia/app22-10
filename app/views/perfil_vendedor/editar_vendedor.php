<?php  require_once "indexperfil.php"; ?>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner" class="container">


            <div class="ui text container form-sobre-fotos" >
                <div class="ui text container centered aligned">
                    <h1>Editar Cadastro</h1>
                </div><br>
                <!--formulario de cadastro -->
                <form class="ui form" action="?acao=atualizar" method="post">
                    <!--NOME -->
                    <div class="field">
                        <label><font color="#636363">Nome Completo</font></label>
                        <input type="text" name="nome" value="<?= $vend->getNome(); ?>">
                    </div>
                    <!--TELEFONE -->
                    <div class="field">
                        <label><font color="#363636">Telefone</font></label>
                        <input type="text" name="telefone" value="<?= $vend->getTelefone(); ?>">
                    </div>

                    <!--EMAIL -->
                    <div class="field">
                        <label><font color="#363636">Endereço de email</font></label>
                        <input type="text" name="email" value="<?= $vend->getEmail(); ?>">
                    </div>

                    <!--CPF -->
                    <div class="field">
                        <label><font color="#363636">CPF</font></label>
                        <input type="text" name="cpf" value="<?= $vend->cpf; ?>">
                    </div>

                    <!--EMPRESA -->
                    <div class="field">
                        <label><font color="#363636">Empresa</font></label>
                        <input type="text" name="empresa" value="<?= $vend->empresa; ?>">
                    </div>
                    <!--senha -->
                    <div class="field">
                        <label><font color="#363636">Senha</font></label>
                        <input type="text" name="senha" value="<?= $vend->getSenha(); ?>">
                    </div>

                    <input type="hidden" value="<?= $vend->getIdUsuario() ?>" name="idusu">
                    <input  type="submit" name="enviar" onclick="return confirm('Usuário editado com sucesso!');">
                </form>
            </div>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

<?php require_once "rodape.php"; ?>