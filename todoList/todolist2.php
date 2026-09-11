<?php 

# Conexão com o banco9
$localhost = "localhost";
$banco = "todo_list2";
$usuario = "root";
$senha = "";

$conn = new mysqli($localhost, $usuario, $senha, $banco);
if($conn->connect_error){
    die("Algo deu errado..." . mysqli_connect_error());
}

# criacao de tarefas

if(isset($_POST['descrição']) && !empty(trim($_POST['descricao']))){
   $descricao = $conn -> real_escape_string($_POST['descricao']);
   $sqlCreate = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";

   if($conn -> query($sqlCreate) == TRUE){
    header("location: todolist2.php");
   }
}

# Exclusão de tarefas

if(isset($_GET['id'])){
    $id = intval($_GET['delete']);
    $sqlDelete = "DELETE FROM tarefas WHERE id = $id";

    if($conn -> query($sqlDelete) == TRUE){
        header("location: todolist2.php");
       }
}


$tarefas=[]; 
# Listar tarefas

$sqlSelect = "SELECT * FROM tarefas ORDER BY data_criacao DESC";

$resultado = $conn -> query($sqlSelect);

if($resultado -> $row > 0){
    while($row = $resultado->fetch_assoc()){
        $tarefas = $row;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo-list</title>
</head>
<body>

    <h1>TO-DO List</h1>
    <form action="todo-list2.php" method="POST">
        <input type="text" placeholder="Descrição da sua tarefa" name="descricao"/>
        <button type="submit">Adicionar</button> 
    </form>

    <?php if(!empty($tarefas)): ?>
    <h2>Suas tarefas</h2>
        <ul>
            <?php foreach($tarefas as $tarefa):?>
            <li>
                <?php echo $tarefa['descricao'] ?>
                <a href="todoList2.php?delete=<?php $tarefa['id'] ?>">Excluir</a>
            </li>
            <?php endforeach ?>
        </ul>

    <?php else: ?>
        <h3>não tenho uma tarefa.</h3> 

    <?php endif; ?>

</body>
</html>