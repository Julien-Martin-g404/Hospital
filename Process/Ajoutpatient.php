<?php

include('connexion.php');


$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];


$sql = "INSERT INTO patients (id, lastname, firstname, birthdate, phone, mail)
        VALUES(NULL, '$lastname','$firstname','$birthdate','$phone','$mail')";

$mysqlConnection->exec($sql);

header('Location: /Hospital/Vues/ajoutpatient.php');
