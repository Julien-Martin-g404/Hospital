<?php

    include('connexion.php');
    $id = $_GET['id'];

    $statement = $mysqlConnection->prepare('SELECT * FROM patients WHERE id=:id');
    $statement->execute(['id' => $id]);
    $patient = $statement->fetch();
