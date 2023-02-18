<form method="get" action="frontController.php?controller=trajet&action=created">
    <fieldset class="fieldsetMilieu">
        <legend>Modifier un trajet :</legend>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="trajet_id">Id</label>
            <input class="InputAddOn-field" type="text" readonly value="<?= $trajet->getId();?>" name="id" id="trajet_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="depart_id">Départ</label>
            <input class="InputAddOn-field" type="text" value="<?= $trajet->getPDepart();?>" placeholder="Nimes" name="depart" id="depart_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="arrivee_id">Arrivée</label>
            <input class="InputAddOn-field" type="text" value="<?= $trajet->getPArrivee();?>" placeholder="Paris" name="arrivee" id="arrivee_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="date_id">Date</label>
            <input class="InputAddOn-field" type="text" value="<?= $trajet->getDate();?>" placeholder="2022-09-29" name="date" id="date_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="nb_place_id">Nombre de places</label>
            <input class="InputAddOn-field" type="number" value="<?= $trajet->getnbPlaces();?>" placeholder="5" name="places" id="nb_place_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="prix_id">Prix</label>
            <input class="InputAddOn-field" type="number" value="<?= $trajet->getPrix();?>" placeholder="12" name="prix" id="prix_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="login_id">Conducteur</label>
            <input class="InputAddOn-field" type="text" value="<?= $trajet->getconducteurLogin();?>"placeholder="tnalix" name="login" id="login_id" required/>
        </div>
        <div class="InputAddOn">
            <input type='hidden' name='action' value='updated'>
            <input type='hidden' name='controller' value='trajet'>
            <input class="InputAddOn-field" type="submit" value="Envoyer" />
        </div>
    </fieldset>
</form>
