<?php

// Récupération de l'ID du patient à supprimer depuis l'URL
$patientId = $_GET['id'];

include('connexion.php');

// Suppression des rendez-vous du patient
$sqlDeleteAppointments = "DELETE FROM appointments WHERE idPatients = $patientId";
if ($conn->query($sqlDeleteAppointments) === TRUE) {
    echo "Les rendez-vous du patient ont été supprimés avec succès.<br>";
} else {
    echo "Erreur lors de la suppression des rendez-vous du patient : " . $conn->error . "<br>";
}

// Suppression du patient
$sqlDeletePatient = "DELETE FROM patients WHERE id = $patientId";
if ($conn->query($sqlDeletePatient) === TRUE) {
    echo "Le patient a été supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression du patient : " . $conn->error;
}

// Fermeture de la connexion
$conn->close();
