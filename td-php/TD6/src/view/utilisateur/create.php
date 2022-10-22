<form method="post" action="frontController.php?controller=utilisateur&action=created">
    <fieldset>
        <legend>Créer un utilisateur :</legend>
        <p>
            <label for="immat_id">Login</label> :
            <input type="text" placeholder="chevallierj" name="login" id="login_id" required/>
        </p>
        <p>
            <label for="color_id">Prénom</label> :
            <input type="text" placeholder="Julie" name="prenom" id="prenom_id" required/>
        </p>
        <p>
            <label for="marque_id">Nom</label> :
            <input type="text" placeholder="Chevallier" name="nom" id="nom_id" required/>
        </p>
        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
</form>