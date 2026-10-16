<?php

require_once __DIR__ . '/../model/usuario.php';

class usuarioController{
    private $usuarioModel;

    public function _construct(){
        $this->usuarioModel = new Usuario();
    }

    public function index(){
        if(isset($_SESSION['id'])){
            header("Location: index.php?action=painel");

            exit;
        }

        include __DIR__ . '/../view/login.php';

    }

    public function autenticar(){
        if(isset($_POST['email'], $_POST['senha'])){
            header("location: index.php");
            exit;
        }

        $email = trim($_POST['email']);
        $senha = $_POST['senha'];

        if(empty($email) || empty($senha)){
            $erro = "Preencha seu email e senha.";
            include __DIR__ . "/../view/login.php";
        }
    }
}

?>