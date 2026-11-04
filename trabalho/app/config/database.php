?<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $senha = '';
    private $banco = 'todo_list';

    public $conn = '';

    public function conectar(){
        $conn = new mysqli($this->host, $this->username, $this->senha, $this->banco);

        if($this->conn->connect_error){
            die("Deu erro na conexão do banco (se lascou kkkkkkk)");
        }

        return $this->conn;
    }
}

?>