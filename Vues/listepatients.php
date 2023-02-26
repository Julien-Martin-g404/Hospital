<?php

include('../Utils/header.php');
include('../Process/Listepatients.php');

?>

<section>


    <h2>Liste des patients</h2>

    <table class='tabcenter2'>

        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Date de Naissance</th>

        </tr>

        <?php foreach ($patients as $patient) { ?>
            <tr>
                <td>
                    <?= $patient['lastname'] ?>
                </td>

                <td>
                    <?= $patient['firstname'] ?>
                </td>

                <td class='td'>
                    <?= $patient['birthdate'] ?>
                </td>

                <td class='td1'>
                    <a href=" profil.php?id=<?= $patient['id'] ?>">
                        <button class='button1'>Détail profil</button>
                    </a>
                </td>

                <td class='td1'>
                    <a href="../Process/Suppatientsrdv.php=<?= $patient['id'] ?>">
                        <button class='button2'>Supprimer</button>
                    </a>
                </td>
            </tr>
        <?php } ?>

        <tr>

            <a href="ajoutpatient.php" target="_blank">
                <button class='button'>Ajouter un patient</button>
            </a>

        </tr>

    </table>

</section>

<?php

include('../Utils/footer.php');

?>