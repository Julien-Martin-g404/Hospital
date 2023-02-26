<?php

include('connexion.php');


$daterdv = $_POST['daterdv'];
$id = $_POST['idp'];



$sql = "INSERT INTO appointments (id, dateHour, idPatients)
        VALUES(NULL, '$daterdv','$id')";

$mysqlConnection->exec($sql);

header('Location: /Hospital/Vues/ajoutrdv.php');
