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
            <input class="InputAddOn-field" type="submit" value="Envoyer" />
        </div>
    </fieldset>
</form>
