<?php require_once "indexperfil.php"; ?>


<div id="page-wrapper" >
        <div id="page-inner" class="container">

<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "leaneth";
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$pesquisar = $_POST['pesquisar'];
$result_produtos = "select * from produtos where nome like '%$pesquisar%'";
$resultado_produtos = mysqli_query($conn, $result_produtos);

if($rows_produtos = mysqli_fetch_array($resultado_produtos)){
    echo "nome do produto: ".$rows_produtos['nome']."<br>";
}else echo "Produto não encontrado!";

?>
        </div>
    </div>

<?php require_once "rodape.php"; ?>


