<form method="post" action="frontController.php?controller=utilisateur&action=created">
    <fieldset class="fieldsetMilieu">
        <legend>Créer un utilisateur :</legend>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="immat_id">Login</label>
            <input class="InputAddOn-field" type="text" placeholder="chevallierj" name="login" id="login_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="color_id">Prénom</label>
            <input class="InputAddOn-field" type="text" placeholder="Julie" name="prenom" id="prenom_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="marque_id">Nom</label>
            <input class="InputAddOn-field" type="text" placeholder="Chevallier" name="nom" id="nom_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="email_id">Email&#42;</label>
            <input class="InputAddOn-field" type="email" value="" placeholder="julie@gmail.com" name="email" id="email_id" required>
        </div>
        <?php

        use App\Covoiturage\Lib\ConnexionUtilisateur;

        if (ConnexionUtilisateur::estAdministrateur()) {
            echo '<div class="InputAddOn">
                        <label class="InputAddOn-item" for="estAdmin_id">Administrateur</label>
                        <input class="InputAddOn-field" type="checkbox" name="estAdmin" id="estAdmin_id">
                    </div>';
        }
        ?>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="mdp_id">Mot de passe&#42;</label>
            <input class="InputAddOn-field" type="password" value="" placeholder="" name="mdp" id="mdp_id" required>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="mdp2_id">Vérification du mot de passe&#42;</label>
            <input class="InputAddOn-field" type="password" value="" placeholder="" name="mdp2" id="mdp2_id" required>
        </div>
        <div class="InputAddOn">
            <input class="InputAddOn-field" type="submit" value="Envoyer" />
        </div>
    </fieldset>
</form>
