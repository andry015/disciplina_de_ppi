<?php

require_once __DIR__ . '/../config/database.php';

class usuario{

    private $conn;

    public function _construct(){
        $db = new Databse();
        $this->conn = $db->conectar();
    }

    public function buscar($email){
        $sql = 'SELECT * FROM usuarios WHERE email = ?';
         $stm = $this->conn->prepare($sql);
         $stm->blin-param("s", $email);
         $stm->execute();
         
         $resultado = $stm->get_result();
         return $resultado->fetch_assoc();
    }
}

?>