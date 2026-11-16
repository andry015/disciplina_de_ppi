<?php

require_once __DIR__ . '/../model/tarefa.php';

class tarefaController{
    private $tarefaModel;

    public function __construct(){
        $this->tarefaModel = new Tarefa();
    }

    public function exigirLogin(){
        if(!isset($_SESSION['id'])){
            header('Location: index.php');
            exit;
        }
        return (int) $_SESSION['id'];
    }

    public function index(){
        $id_usuario = $this->exigirLogin();
        $tarefas = $this->tarefaModel->listar($id_usuario);
        include __DIR__ . '/../view/listar.php';
    }

    public function criar(){
        $id_usuario = $this->exigirLogin();
        if(isset($_POST['descricao']) && !empty(trim($_POST['descricao']))){
            $this->tarefaModel->criar(trim($_POST['descricao']), $id_usuario);
        }
        header("Location: index.php?action=tarefas");
        exit;    
    }

    public function excluir(){
        $id_usuario = $this->exigirLogin();
        if(isset($_GET['id'])){
            $this->tarefaModel->excluir((int) $_GET['id'], $id_usuario);
        }
        header("Location: index.php?action=tarefas");
        exit;
    }

    public function editar(){
        $id_usuario = $this->exigirLogin();
        if(isset($_POST['id']) && isset($_POST['descricao']) && !empty(trim($_POST['descricao']))){
            $this->tarefaModel->editar(trim($_POST['descricao']), (int) $_POST['id'], $id_usuario);
        }

        header("Location: index.php?action=tarefas");
        exit;
    
    }

    
}

?>