<?php use App\Covoiturage\Lib\ConnexionUtilisateur; ?>
<form method="get" action="frontController.php?controller=utilisateur&action=updated">
    <fieldset class="fieldsetMilieu">
        <legend>Modifier un utilisateur :</legend>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="login_id">Login</label>
            <input class="InputAddOn-field" readonly type="text" value="<?= $utilisateur->getLogin();?>" name="login" id="login_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="prenom_id">Prénom</label>
            <input class="InputAddOn-field" type="text" value="<?= $utilisateur->getPrenom();?>" placeholder="Michel" name="prenom" id="prenom_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="nom_id">Nom</label>
            <input class="InputAddOn-field" type="text" value="<?= $utilisateur->getNom();?>" placeholder="Dupont" name="nom" id="nom_id" required/>
        </div>
        <?php
        if (ConnexionUtilisateur::estAdministrateur()) {
            echo '<div class="InputAddOn">
                        <label class="InputAddOn-item" for="estAdmin_id">Administrateur</label>
                        <input class="InputAddOn-field" type="checkbox" name="estAdmin" id="estAdmin_id"';
            if ($utilisateur->isEstAdmin()) {
                echo 'checked';
            }
            echo '>
                    </div>';
        }
        ?>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="mdp_id">Ancien mot de passe&#42;</label>
            <input class="InputAddOn-field" type="password" value="" placeholder="" name="oldMdp" id="mdp_id" required>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="mdp2_id">Nouveau mot de passe&#42;</label>
            <input class="InputAddOn-field" type="password" value="" placeholder="" name="mdp" id="mdp2_id" required>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="mdp3_id">Vérification du mot de passe&#42;</label>
            <input class="InputAddOn-field" type="password" value="" placeholder="" name="mdp1" id="mdp3_id" required>
        </div>
        <div class="InputAddOn">
            <input type='hidden' name='action' value='updated'>
            <input type='hidden' name='controller' value='utilisateur'>
            <input class="InputAddOn-field" type="submit" value="Envoyer" />
        </div>
    </fieldset>
</form>
