<?php

include('../Utils/header.php');
include('../Process/Listerdv.php');

?>

<section class='td2'>

    <h2 style="margin-top: 30px; margin-bottom: 30px;">Liste des Rendez-vous</h2>


    <table class='tabcenter2'>

        <tr>

            <th>Nom Patient</th>
            <th>Date et Heure</th>

        </tr>

        <?php foreach ($appointments as $appointment) { ?>
            <tr>

                <td>
                    <?= $appointment['lastname'] ?> <?= $appointment['firstname'] ?>

                </td>

                <td>
                    <?= $appointment['dateHour'] ?>
                </td>

            </tr>
        <?php } ?>

    </table>
</section>

<?php

include('../Utils/footer.php');

?>