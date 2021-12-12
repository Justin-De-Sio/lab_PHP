<?php
require '../../utils.inc.php';
require 'data-processing.php';
start_page('formulaire');
?>
<h1>register page</h1>
<form action="form.php" method="post">
    <div>
        <label for="id">Identifiant :</label>
        <input type="number" id="id" name="user_name">
    </div>
    <div>
        <label for="Sex">Civilité :</label>
        <select name="user_sex" id="Sex">
            <option value="">--Please choose an option--</option>
            <option value="Homme">Homme</option>
            <option value="Femmme">Femme</option>
        </select>


    </div>
    <div>
        <label for="email">e-mail:</label>
        <input type="text" id="email" name="user_email">
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="user_password">
    </div>
    <div>
        <label for="vPassword">Vérification de Mot de passe</label>
        <input type="password" id="vPassword" name="user_password_verification">
    </div>
    <div>
        <label for="phone">Téléphone</label>
        <input type="text" id="phone" name="phone">
    </div>
    <div>
        <label for="state">Pays</label>
        <?php  include 'states.php';?>
    </div>
    <div>
        <label for="Conditions générales">Conditions générales</label>
        <input type="checkbox" id="Conditions générales" name="cgu_check">
    </div>
    <div class="button">
        <button type="submit" value="mailer" name="action">action</button>
        <button type="submit" value="rec" name="action">action2</button>
    </div>
</form>

<?php
end_page();
?>
