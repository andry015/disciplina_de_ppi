<?php

require_once __DIR__ . '/../config/database.php';

class Tarefa{

    
    private $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
    }

    #LISTAR
    public function listar(){
        $tarefas = [];

        $sql = "SELECT * FROM tarefas WHERE id_user = ? ORDER BY data_criacao DESC";
        $resultado = $this->conn->query($sql);

        if($resultado->num_rows>0){
            while($row = $resultado->fetch_assoc()){
                $tarefas[] = $row;
            }
        }

        return $tarefas;
    }

    #CRIAR
    public function criar($descricao){
        $descricao = $this->conn->real_escape_string($descricao);
        $sql = "INSERT INTO tarefas (descricao, id_user) VALUES ('?, ?')";
        return $this->conn->query($sql);

    }

    #EXCLUIR
    public function excluir($id){
        $id = intval($id);
        $sql = "DELETE FROM tarefas WHERE id = ? AND id_user = ?";
        return $this->conn->query($sql);
    }

    #Editar
    public function editar($descricao, $id){
        $descricao = $this->conn->real_escape_string($descricao);
        $id = intval($id);
        $sql = "UPDATE tarefas SET descicao = '$descricao' WHERE id = ? AND id_user = ?";
        return $this->conn->query($sql);
    }

}

?>