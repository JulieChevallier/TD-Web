<form method="post" action="frontController.php?controller=utilisateur&action=connecter">
    <fieldset class="fieldsetMilieu">
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="login_id">Login</label>
            <input class="InputAddOn-field" type="text" placeholder="Identifiant" name="login" id="login_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="mdp_id">Mot de passe</label>
            <input class="InputAddOn-field" type="password" placeholder="Mot de passe" name="mdp" id="mdp_id" required/>
        </div>
        <div class="InputAddOn">
            <input class="InputAddOn-field" type="submit" value="Connexion" />
        </div>
    </fieldset>
</form>