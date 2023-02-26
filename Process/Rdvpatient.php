<?php

include('connexion.php');
$id = $_GET['id'];

$stmts = $mysqlConnection->prepare('SELECT dateHour FROM appointments WHERE idPatients= :id');
$stmts->execute(
    array(
        ':id' => intval($id)
    )
);
$patientss = $stmts->fetchALl();
