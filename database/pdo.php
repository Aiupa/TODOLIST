<?php

$errors = " ";
$db = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root', '');
 
if (isset($_POST['new_task'])) { // On vérifie que la variable POST existe
    if (empty($_POST['new_task'])) {  // On vérifie qu'elle as une valeure
        $errors = 'You must add a task';
    } else {
        $task = $_POST['new_task'];
        $db->exec("INSERT INTO task(todo) VALUES('$task')"); // On insère la tâche dans la base de donnée
    }
}

if(isset($_GET['delete_task'])) {
    $id = $_GET['delete_task'];
    $db->exec("DELETE FROM task WHERE id=$id");
}

?>