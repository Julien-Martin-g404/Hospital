<?php

include('connexion.php');


// Récupération des patients
$stmt = $mysqlConnection->query('SELECT * FROM patients');
$patients = $stmt->fetchAll();
