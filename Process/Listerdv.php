<?php

include('connexion.php');

$stmt = $mysqlConnection->query('SELECT appointments.dateHour, patients.lastname, patients.firstname
FROM appointments
INNER JOIN patients ON appointments.idPatients = patients.id
order by appointments.dateHour asc');
$appointments = $stmt->fetchAll();
