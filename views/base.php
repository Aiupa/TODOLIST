<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My simple TODO LIST</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="views/css/style.css">
</head>

<body>
    <div class="header">
        <h1>TODO LIST</h1>
    </div>
    <form class="taches_input" method="POST" action="index.php">
        <input id="task" type="text" name="new_task" />
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>

    <?php
    if (isset($erreurs)) {
    ?>
        <p><?php echo $erreurs ?></p>
    <?php }
    ?>

    <table class="table">
        <tr>
            <th scope="col">
                Nom
            </th>
            <th scope="col">
                Action
            </th>
        </tr>
    <?php
        $response = $db->query('SELECT * FROM task'); // On exécute une requête visant à récupérer les tâches
        while ($tasks = $response->fetch()) { // On initialise une boucle
    ?>
        <tr>
            <td><?php echo $tasks['todo'] ?></td>
            <td><a class="suppr" href="index.php?delete_task=<?php echo $tasks['id'] ?>"> DELETE </a></td>
        </tr>
    <?php
        }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>