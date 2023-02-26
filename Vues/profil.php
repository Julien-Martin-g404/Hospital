<?php

include('../Utils/header.php');
include('../Process/Profil.php');

?>

<section class='td2'>


    <table class='tabcenter2'>

        <tr>
            <td>
                <h2>Profil du patient</h2>
            </td>

            <td>
                <h2>Ses rendez-vous</h2>
            </td>
        </tr>
        <tr>
            <td>

                <table class='tabcenter3 '>
                    <tr>
                        <td>
                            prénon :
                        </td>

                        <td>
                            <?= $patient['firstname'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Nom :
                        </td>

                        <td>
                            <?= $patient['lastname'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Date:
                        </td>

                        <td>
                            <?= $birthdate_fr = date("d/m/Y", strtotime($patient['birthdate'])); ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Téléphone :
                        </td>

                        <td>
                            <?= $patient['phone'] ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Adresse mail :
                        </td>

                        <td>
                            <?= $patient['mail'] ?>
                        </td>
                    </tr>
                </table>

            </td>

            <td>

                <table class='tabcenter3'>

                    <?php
                    include('../Process/Rdvpatient.php');
                    ?>

                    <td class="td">
                        <h5 style="text-align: center;">Date et heure:</h5><br>

                        <?php
                        setlocale(LC_TIME, 'fr_FR.utf8');

                        if (empty($patientss)) {
                            echo "Aucun rendez-vous";
                        } else {
                            foreach ($patientss as $patien) {
                                $date = new DateTime($patien['dateHour']);
                                echo strftime("%A %d %B %Y à %H:%M", $date->getTimestamp()) . "<br>";
                            }
                        }

                        ?>
                    </td>

                </table>

            </td>
        </tr>
    </table>

    <button class='button' onclick="showform()">Modifier le profil</button>

    <form class='clear' id="modif" action="/Hospital/Process/Modifprofil.php" style="display: none;" method="post">

        <table class='tabcenter'>

            <tr>
                <td>
                    <label for="id">Id :</label>
                </td>

                <td>
                    <input type="text" readonly id="id" name="id" value="<?php echo $patient['id']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="lastname">Nom :</label>
                </td>

                <td>
                    <input type="text" id="lastname" name="lastname" value="<?php echo $patient['lastname']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="firstname">Prénom :</label>
                </td>

                <td>
                    <input type="text" id="firstname" name="firstname" value="<?php echo $patient['firstname']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="birthdate">Date:</label>
                </td>

                <td>
                    <input type="date" id="birthdate" name="birthdate" value="<?php echo $patient['birthdate']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="phone">Téléphone :</label>
                </td>

                <td>
                    <input type="tel" id="phone" name="phone" value="<?php echo $patient['phone']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="mail">Adresse mail :</label>
                </td>

                <td>
                    <input type="email" id="mail" name="mail" value="<?php echo $patient['mail']; ?>">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Valider">
                </td>
            </tr>
        </table>

    </form>


    <script src="../Process/Script showform.js"></script>

</section>

<?php

include('../Utils/footer.php');

?>