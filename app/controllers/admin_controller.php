<?php

require_once __DIR__. '/../crud/CrudAdministrador.php';
require_once __DIR__. '/../models/Administrador.php';

function perfil_admin(){
    session_start();
    $administrador = new CrudAdministrador();
    $admin = $administrador->getAdministrador($_SESSION['id_user']);
    include __DIR__."/../views/perfil_admin/informacoesperfil.php";
}
function listarAdmin(){
    session_start();
    $administrador = new CrudAdministrador();
    $admin = $administrador->getAdministrador($_SESSION['id_user']);
    include __DIR__."/../views/perfil_admin/informacoesperfil.php";
}

function cadastrarAdmin(){
    $crud = new CrudAdministrador();
    include '../views/cadastro_admin.php';
}

function salvarAdmin(){ //DANDO ERRO
    echo "<pre>";

    $usuario = new Administrador($_POST['nome'], $_POST['email'], $_POST['senha'],  $_POST['telefone'], $_POST['razao_social'], $_POST['nome_fantasia'], $_POST['cnpj']);
    $adm = new CrudAdministrador();
    $resultado = $adm->cadastrar($usuario);

    header("Location: http://localhost/tcc/app/controllers/produto_controller.php?acao=listar");
}

function editarAdmin(){
    session_start();
    $crud = new CrudAdministrador();

    if (isset($_POST['enviar'])){
        $admin1 = new Administrador($_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['telefone'],$_POST['razao_social'],$_POST['nome_fantasia'],$_POST['cnpj'],$_POST['idusu']);
        $crud->editar($admin1);
        header("Location: http://localhost/tcc/app/controllers/admin_controller.php?acao=listarAdmin");
    }else{
        $admin = $crud->getAdministrador($_SESSION['id_user']);
        require_once  __DIR__."/../views/perfil_admin/editaradmin.php";
    }

}

function excluirAdmin($id_usuario){
    $crud = new CrudAdministrador();
    $crud->excluir($id_usuario);
    header("location: http://localhost/tcc/app/views/login.php") ;
}

//ROTAS
if (isset($_GET['acao']) && !empty($_GET['acao']) ) {

    if ($_GET['acao'] == 'cadastrar') {
        echo "chegou na rota";
        cadastrarAdmin();

    } elseif ($_GET['acao'] == 'salvar') {
        salvarAdmin();

    } elseif ($_GET['acao'] == 'perfil_admin') {
        perfil_admin();

    } elseif ($_GET['acao'] == 'editarAdmin') {
        editarAdmin();

    }elseif ($_GET['acao'] == 'excluir') {
        excluirAdmin($_GET['id_usuario']);

    }elseif ($_GET['acao'] == 'listarAdmin') {
        listarAdmin();

    } else {
        require"http://localhost/tcc/app/views/cadastro_admin.php";
    }
}
