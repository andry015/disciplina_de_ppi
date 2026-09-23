<?php
<<<<<<< HEAD
require_once __DIR__ . '/app/controller/controller.php';
$controler = new tarefaController();
$action = $_GET['action'] ?? 'index';

switch($action){
    case 'criar':
        $controller->criar();
        break;
    case 'excluir':
        $controller->excluir();
        break;
    case 'editar':
        $controller->editar();
        break;  
    default:
        $controller->index();
        break;            
}
=======

require_once __DIR__ . '/app/controller/controller.php';

$controller = new tarefaController();

$action = $_GET['action'] ?? 'index';

switch ($action){
    case 'criar': 
        $controller->criar();
        break;
    case 'excluir': 
        $controller->excluir();
        break;
    case defaut: 
        $controller->index();
        break;
}

>>>>>>> 2b1519c847e80add92e4b9a56dc34afe724eb7e0
?>