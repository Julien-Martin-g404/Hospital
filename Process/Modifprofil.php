<?php
include('connexion.php');
?>

<?php

if (isset($_POST['lastname'])) {

    try {

        $sql = "UPDATE patients SET lastname = ?, firstname = ?, birthdate = ?, phone = ?, mail = ? WHERE id = ?";
        $stmt = $mysqlConnection->prepare($sql);
        $stmt->execute([$_POST['lastname'], $_POST['firstname'], $_POST['birthdate'], $_POST['phone'], $_POST['mail'], $patient['id']]);
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
}

?>