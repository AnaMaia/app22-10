<?php

require __DIR__.'/../crud/CrudVendedor.php';

function listar(){
    $crud = new CrudVendedor();
    $vendedores = $crud->getVendedores();
    include __DIR__."/../views/perfil_admin/visualizarvendedores.php";
}

function listarVend(){
    session_start();
    $vendedor = new CrudVendedor();
    $vend = $vendedor->getVendedor($_SESSION['id_user']);
    include __DIR__."/../views/perfil_vendedor/informacoesperfil.php";
}

function cadastrar(){
    $crud = new CrudVendedor();
    include __DIR__.'/../views/cadastro_vend.html';
}

function salvar(){ //DANDO ERRO
    echo "<pre>";

    $usuario = new Vendedor($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['telefone'], $_POST['cpf'],$_POST['empresa']);
        $vend = new CrudVendedor();
    $resultado = $vend->cadastrar($usuario);

    header("Location: produto_controller.php?acao=listar'");
}

// este metodo é chamado pelo botao editar
// simplesmente carrega os dados do usuario e exibe o formulario para edita-los
function editar(){
    @session_start();
    $crud = new CrudVendedor();
    $id_vendedor = $_SESSION['id_user'];
    $vend = $crud->getVendedor($id_vendedor);
    include '../views/perfil_vendedor/editar_vendedor.php';
}

function atualizar(){
    session_start();
    $crud = new CrudVendedor();
    $vend = new Vendedor($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['telefone'], $_POST['cpf'], $_POST['empresa'],$_POST['idusu']);
    $crud->editar($vend);

    header("Location: http://localhost/tcc/app/controllers/vend_controller.php?acao=listarVend");
}




function excluirVend($id_usuario){
    $crud = new CrudVendedor();
    $crud->excluir($id_usuario);

    header("location: http://localhost/tcc/app/views/login.php") ;
}

//ROTAS
if (isset($_GET['acao']) && !empty($_GET['acao']) ) {

    if ($_GET['acao'] == 'cadastrar') {
        //echo "chegou na rota";
        cadastrar();

    } elseif ($_GET['acao'] == 'salvar') {
        salvar();

    } elseif ($_GET['acao'] == 'editar') {
        editar();

    } elseif ($_GET['acao'] == 'atualizar') {
        atualizar();

    }elseif ($_GET['acao'] == 'excluir') {
        excluirVend($_GET['id_usuario']);

    }elseif ($_GET['acao'] == 'listar') {
        listar();

    } elseif ($_GET['acao'] == 'listarVend') {
        listarVend();
    }else {
        require '../views/cadastro_vend.html';
    }
} else {
    require '../views/cadastro_vend.html';
}