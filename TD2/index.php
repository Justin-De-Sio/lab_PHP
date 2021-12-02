<?php
include 'utils.inc.php';
start_page('formulaire');
?>

<form action="data-processing.php" method="post">
    <div>
        <label for="identifiant">Identifiant :</label>
        <input type="text" id="identifiant" name="user_name">
    </div>
    <div>
        <label for="Sexe">Civilité :</label>
        <select name="user_sexe" id="Sexe">
            <option value="">--Please choose an option--</option>
            <option value="Homme">Homme</option>
            <option value="Femmme">Femmme</option>
            <option value="Chaise">Chaise</option>
        </select>


    </div>
    <div>
        <label for="email">e-mail:</label>
        <input type="text" id="email" name="user_email">
    </div>
    <div>
        <label for="Mot de passe">Mot de passe</label>
        <input type="text" id="Mot de passe" name="user_password">
    </div>
    <div>
        <label for="Verification de Mot de passe">Vérification de Mot de passe</label>
        <input type="text" id="Verification de Mot de passe" name="user_password_verification">
    </div>
    <div>
        <label for="Téléphone">Téléphone</label>
        <input type="text" id="Téléphone" name="phone">
    </div>
    <div>
        <label for="Pays">Pays</label>
        <?php  include 'pays.php';?>
    </div>
    <div>
        <label for="Conditions générales">Conditions générales</label>
        <input type="checkbox" id="Conditions générales" name="cgu_check">
    </div>
    <div class="button">
        <button type="submit" value="mailer" name="action">action</button>
    </div>
</form>

<?php
require 'data-processing.php';
end_page();
?>
