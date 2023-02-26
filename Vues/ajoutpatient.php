<?php

include('../Utils/header.php');

?>

<section class='td2'>

    <h2>Ajouter un patient</h2>

    <form action="/Hospital/Process/Ajoutpatient.php" method="post">

        <table class='tabcenter'>
            <tr>
                <td>
                    <label for="lastname">Nom :</label>
                </td>

                <td>
                    <input type="text" id="lastname" name="lastname">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="firstname">Prénom :</label>
                </td>

                <td>
                    <input type="text" id="firstname" name="firstname">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="birthdate">Date Naissance:</label>
                </td>

                <td>
                    <input type="date" id="birthdate" name="birthdate">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="phone">Téléphone :</label>
                </td>

                <td>
                    <input type="tel" id="phone" name="phone">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="mail">Adresse mail :</label>
                </td>

                <td>
                    <input type="email" id="mail" name="mail">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Valider">
                </td>
            </tr>
        </table>

    </form>

</section>

<?php

include('../Utils/footer.php');

?>