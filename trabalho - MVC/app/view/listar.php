<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>To-Do List (MVC)</title>

    <style>

        .modal {
            display: none;

            position: fixed;
            top: 0;
            left: 0;

            width: 100%;
            height: 100%;

            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-conteudo {
            background-color: white;

            width: 300px;

            margin: 150px auto;
            padding: 20px;

            border-radius: 10px;
        }

        
    </style>
</head>
<body>

    <h1> 
        Bem-vindo,
        <?php echo ($_SESSION['nome']); ?>
    </h1>

    <p>
        <a href="index.php?action=logout">Sair</a>
    </p>

    <h1>TO-DO List (MVC)</h1>

    <form action="index.php?action=criar" method="POST">
        <input type="text" name="descricao" placeholder="Descrição da tarefa">
        <button type="submit">Adicionar</button>
    </form>

    <h2>Suas tarefas</h2>
    <?php if (!empty($tarefas)): ?>
        <ul>
            <?php foreach ($tarefas as $tarefa): ?>
                <li>
                    <?php echo htmlspecialchars($tarefa['descricao']); ?>
                    <a href="index.php?action=excluir&id=<?php echo $tarefa['id']; ?>">
                        Excluir
                    </a>
                    <button type="button"
                        onclick="abrirModal(<?php echo (int) $tarefa['id']; ?>, <?php echo htmlspecialchars(json_encode($tarefa['descricao']), ENT_QUOTES); ?>)">
                        Editar
                    </button>
                </li>

            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Não há tarefas ainda!</p>
    <?php endif; ?>

    <?php include __DIR__ . '/modalEditar.php'; ?>


    <script>
        function abrirModal(id, descricao){
            document.getElementById("editarId").value = id
            document.getElementById("editarDescricao").value = descricao
            document.getElementById("modalEditar").style.display = "block";
        }

        function fecharModal(id, descricao){
            document.getElementById("modalEditar").style.display ="none";
        }
    </script>


</body>
</html>