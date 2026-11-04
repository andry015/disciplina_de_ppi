<?php
require_once __DIR__ . '/app/controller/tarefaController.php';
require_once __DIR__ . '/app/controller/usuarioController.php';
$tarefaController = new tarefaController();
$usuarioController = new usuarioController();
$action = $_GET['action'] ?? 'index';

switch($action){
    case 'autenticar':
        $usuarioController->autenticar();
        break;
    case 'logout':
        $usuarioController->logout();
        break;    

      
    case 'criar':
        $tarefaController->criar();
        break;
    case 'excluir':
        $tarefaController->excluir();
        break;
    case 'editar':
        $tarefaController->editar();
        break;  
    default:
        $usuarioController->index();
        break;            
}
?>