<form method="GET" action="frontController.php?controller=voiture&action=updated">
    <fieldset class="fieldsetMilieu">
        <legend>Modifier une voiture :</legend>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="immat_id">Immatriculation</label>
            <input class="InputAddOn-field" readonly value="<?= $voiture->getImmatriculation();?>" type="text" name="immatriculation" id="immat_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="color_id">Couleur</label>
            <input class="InputAddOn-field" type="text" value="<?= $voiture->getCouleur();?>" placeholder="Rouge" name="couleur" id="color_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="marque_id">Marque</label>
            <input class="InputAddOn-field" type="text" value="<?= $voiture->getMarque();?>" placeholder="Tesla" name="marque" id="marque_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="nb_siege_id">Nombre de sièges</label>
            <input class="InputAddOn-field" type="number" value="<?= $voiture->getNbSieges();?>" placeholder="5" name="sieges" id="nb_siege_id" required/>
        </div>
        <div class="InputAddOn">
            <input type='hidden' name='action' value='updated'>
            <input class="InputAddOn-field" type="submit" value="Envoyer" />
        </div>

    </fieldset>
</form>
