<?php

include('../Utils/header.php');

?>

<section class='td2'>

    <h2>Ajout un rendez-vous</h2>

    <form action="/Hospital/Process/Ajoutrdv.php" method="post">

        <table class='tabcenter'>
            <tr>
                <td>
                    <label for="daterdv">Date:</label>
                </td>

                <td>
                    <input type="datetime-local" id="daterdv" name="daterdv">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="idp">id patient :</label>
                </td>

                <td>
                    <input type="id" id="idp" name="idp"><br><br>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Ajouter patient">
                </td>
            </tr>
        </table>

    </form>

</section>

<?php

include('../Utils/footer.php');

?>