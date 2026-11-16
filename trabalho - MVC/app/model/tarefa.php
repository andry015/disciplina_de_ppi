<?php

require_once __DIR__ . '/../config/database.php';

class Tarefa{

    
    private $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
    }

    #LISTAR
    public function listar($id_usuario){
        $tarefas = [];

        $sql = "SELECT * FROM tarefas WHERE id_usuario = ? ORDER BY data_criacao DESC";
        $stm = $this->conn->prepare($sql);
        $stm->bind_param("i", $id_usuario);
        $stm->execute();
        $resultado = $stm->get_result();

        while($row = $resultado->fetch_assoc()){
            $tarefas[] = $row;
        }
        

        return $tarefas;
    }

    #CRIAR
    public function criar($descricao, $id_usuario){
        $sql = "INSERT INTO tarefas (descricao, id_usuario) VALUES (?, ?)";
        $stm = $this->conn->prepare($sql);
        $stm->bind_param("si", $descricao, $id_usuario);
        return $stm->execute();

    }

    #EXCLUIR
    public function excluir($id, $id_usuario){
        $id = intval($id);
        $sql = "DELETE FROM tarefas WHERE id = ? AND id_usuario = ?";
        $stm = $this->conn->prepare($sql);
        $stm->bind_param("ii", $id, $id_usuario);
        return $stm->execute();
    }

    #Editar
    public function editar($descricao, $id, $id_usuario){
        $id = intval($id);
        $sql = "UPDATE tarefas SET descricao = ? WHERE id = ? AND id_usuario = ?";
        $stm = $this->conn->prepare($sql);
        $stm->bind_param("sii", $descricao, $id, $id_usuario);
        return $stm->execute();
    }

}

?>