<?php
    session_start();

        if ( !isset($_SESSION['tasks']) ) {
            $_SESSION['tasks'] = array();
        }

        if ( isset($_ GET['task_name']) ) {
            array_push($_SESSION['tasks'], $_GET['task_name']);
            unset($_GET['task_name']);|
        }

        var_dump($_SESSION['tasks']);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Lista de tarefas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <div class-"container">
        <div class-"header">
            <h1>Gerenciador de Tarefas</h1>
    </div>
    <div class-"form">
        <form action="" method="get">
            <label for-"task_name"></label>
            <input type="text" name="task_name" placeholder="Nome da Tarefa">
            <button type-"submit">Cadastrar</button>
    </form>
    </div>
    <div class-"separator">
    </div>
    <div class-"list-tasks">
        <ul>
            <li>Tarefa 1</li>
            <li>Tarefa 2</1i>
            <li>Tarefa 3</li>
        </ul>
    </div>



</body>
</html>