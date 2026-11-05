<?php

require_once __DIR__ . '/../config/database.php';

class usuario{

    private mysqli $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar();
    }

    public function buscarPorEmail($email){
        $sql = 'SELECT * FROM usuarios WHERE email = ?';
         $stm = $this->conn->prepare($sql);
         $stm->bind_param("s", $email);
         $stm->execute();
         
         $resultado = $stm->get_result();
         return $resultado->fetch_assoc();
    }
}

?>