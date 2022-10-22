<form method="get" action="frontController.php?controller=utilisateur&action=updated">
    <fieldset>
        <legend>Modifier un utilisateur :</legend>
        <p>
            <label for="login_id">Login</label> :
            <input readonly type="text" value="<?= $utilisateur->getLogin();?>" name="login" id="login_id" required/>
        </p>
        <p>
            <label for="prenom_id">Prénom</label> :
            <input type="text" value="<?= $utilisateur->getPrenom();?>" placeholder="Michel" name="prenom" id="prenom_id" required/>
        </p>
        <p>
            <label for="nom_id">Nom</label> :
            <input type="text" value="<?= $utilisateur->getNom();?>" placeholder="Dupont" name="nom" id="nom_id" required/>
        </p>
        <p>
            <input type='hidden' name='action' value='updated'>
            <input type='hidden' name='controller' value='utilisateur'>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
</form>