<?php

class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $senha = '';
    private $banco = 'todo_list';

    public $conn = '';

    public function conectar(): mysqli{
        $conn = new mysqli($this->host, $this->username, $this->senha, $this->banco);

        if($conn->connect_error){
            die("Deu erro na conexão do banco (se lascou kkkkkkk)");
        }

        return $conn;
    }
}

?>