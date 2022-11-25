<form method="GET" action="frontController.php?controller=voiture&action=updated">
    <fieldset>
        <legend>Modifier une voiture :</legend>
        <p>
            <label for="immat_id">Immatriculation</label> :
            <input readonly value="<?= $voiture->getImmatriculation();?>" type="text" name="immatriculation" id="immat_id" required/>
        </p>
        <p>
            <label for="color_id">Couleur</label> :
            <input type="text" value="<?= $voiture->getCouleur();?>" placeholder="Rouge" name="couleur" id="color_id" required/>
        </p>
        <p>
            <label for="marque_id">Marque</label> :
            <input type="text" value="<?= $voiture->getMarque();?>" placeholder="Tesla" name="marque" id="marque_id" required/>
        </p>
        <p>
            <label for="nb_siege_id">Nombre de sièges</label> :
            <input type="number" value="<?= $voiture->getNbSieges();?>" placeholder="5" name="sieges" id="nb_siege_id" required/>
        </p>
        <p>
            <input type='hidden' name='action' value='updated'>
            <input type="submit" value="Envoyer" />
        </p>

    </fieldset>
    <!--    On appelle ca des querystring-->
</form>