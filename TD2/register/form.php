<?php
require '../../utils.inc.php';
require 'data-processing.php';
start_page('formulaire');
?>
<h1>register page</h1>
<form action="form.php" method="post">
    <div>
        <label for="id" class="form-label">Identifiant :</label>
        <input type="number" id="id" name="user_name" class="form-control">
    </div>
    <div>
        <label for="Sex" class="form-label">Civilité : </label>
        <select name="user_sex" id="Sex">
            <option value="">--Please choose an option--</option>
            <option value="Homme">Homme</option>
            <option value="Femmme">Femme</option>
        </select>


    </div>
    <div>
        <label for="email" class="form-label">e-mail: <input type="text" id="email" name="user_email" class="form-control"></label>

    </div>
    <div>
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" id="password" name="user_password" class="form-control">
    </div>
    <div>
        <label for="vPassword" class="form-label">Vérification de Mot de passe</label>
        <input type="password" id="vPassword" name="user_password_verification" class="form-control">
    </div>
    <div>
        <label for="phone" class="form-label" >Téléphone</label>
        <input type="text" id="phone" name="phone" class="form-control">
    </div>
    <div>
        <label for="state " class="form-label">Pays</label>
        <?php  include 'states.php';?>
    </div>
    <div>
        <label for="Conditions générales" class="form-label">Conditions générales</label>
        <input type="checkbox" id="Conditions générales" name="cgu_check" class="form-control">
    </div>
    <div class="button">
        <button type="submit" value="mailer" name="action">action</button>
        <button type="submit" value="rec" name="action">action2</button>
    </div>
</form>

<?php
end_page();
?>
