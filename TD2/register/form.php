<?php
require '../../utils.inc.php';
require 'data-processing.php';
start_page('formulaire');
?>

<div class="mx-auto" style="width: 20em;">
    <h1>register page</h1>
    <form action="form.php" method="post" class="mx-auto" style="width: 20em;">
        <div class="mb-3">
            <label for="id" class="form-label">Identifiant :<input type="number" id="id" name="user_name"
                                                                   class="form-control"></label>

        </div>
        <div class="mb-3">
            <label for="Sex" class="form-label">Civilité :
                <select name="user_sex" id="Sex" class="form-select">
                    <option value="">--Please choose an option--</option>
                    <option value="Homme">Homme</option>
                    <option value="Femmme">Femme</option>
                </select>
            </label>


        </div>
        <div class="mb-3">
            <label for="email" class="form-label">e-mail: <input type="text" id="email" name="user_email"
                                                                 class="form-control"></label>

        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe <input type="password" id="password"
                                                                         name="user_password"
                                                                         class="form-control"></label>

<!--        </div>
        <div class="mb-3">
            <label for="vPassword" class="form-label">Vérification de Mot de passe<input type="password" id="vPassword"
                                                                                         name="user_password_verification"
                                                                                         class="form-control"></label>

        </div>-->
        <div class="mb-3">
            <label for="phone" class="form-label">Téléphone <input type="text" id="phone" name="phone"
                                                                   class="form-control"></label>

        </div>
        <div class="mb-3">
            <label for="state " class="form-label">Pays <?php include 'states.php'; ?></label>

        </div>
        <div class="form-check">
            <label for="Conditions générales" class="form-check-label">Conditions générales <input type="checkbox"
                                                                                                   id="Conditions générales"
                                                                                                   name="cgu_check"
                                                                                                   class="form-check-input"></label>

        </div>
        <div class="button mb-3">
            <button type="submit" value="mailer" name="action" class="btn btn-primary">action</button>
            <button type="submit" value="rec" name="action" class="btn btn-secondary">action2</button>
        </div>
    </form>
</div>
<?php
end_page();
?>
