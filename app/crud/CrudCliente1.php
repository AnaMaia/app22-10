<?php
require_once '../database/Conexao.php';
require_once '../models/Cliente1.php';


class CrudCliente1{

    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }

    public function getCliente($id_cliente){
        $consulta = $this->conexao->query("SELECT * FROM cliente_loja WHERE idCliente = $id_cliente");
        $cliente = $consulta->fetch(PDO::FETCH_ASSOC);
        return new Cliente($cliente['nomeFantasia'], $cliente['cnpj'], $cliente['email'], $cliente['razao_social'], $cliente['telefone'], $cliente['idCliente']);
    }

    public function getClientes(){
        $consulta = $this->conexao->query("SELECT * FROM cliente_loja");
        $arrayClientes = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $listaClientes = [];
        foreach ($arrayClientes as $cliente) {
            $listaClientes[] = new Cliente ($cliente['nomeFantasia'], $cliente['cnpj'], $cliente['email'], $cliente['razao_social'], $cliente['telefone'], $cliente['endereco'], $cliente['idCliente']);
        }
        return $listaClientes;
    }

    public function insertCliente(Cliente $cliente){
        $sql = "insert into cliente_loja (nomeFantasia, cnpj, email, razao_social, telefone, endereco) 
                values ('$cliente->nomeFantasia', '$cliente->cnpj', '$cliente->email', '$cliente->razao_social', '$cliente->telefone', '$cliente->endereco')";
        return $this->conexao->exec($sql);
    }

    public function editarCliente(Cliente $cliente){
        $sql = "UPDATE cliente_loja SET nomeFantasia = '{$cliente->nomeFantasia}', 
                                        cnpj = '{$cliente->cnpj}', 
                                        email = '{$cliente->email}', 
                                        razao_social = '{$cliente->razao_social}', 
                                        telefone = '$cliente->telefone}', 
                                        endereco = '$cliente->endereco}' 
                                        WHERE idCliente = {$cliente->id_cliente}";

        try {
            $res = $this->conexao->exec($sql);
            return $res;
        } catch (PDOException $erro) {
            return $erro->getMessage();
        }
    }

    public function deletarCliente($id_cliente){
        $delete = "DELETE FROM cliente_loja WHERE idCliente = $id_cliente";
        return $this->conexao->exec($delete);
    }
}

//$cli = new Cliente('heitor',46287647,'heitor@heitor',252355,25255235,'rua alguma',3);
//$crud = new CrudCliente1();
//$crud->editarCliente($cli);
