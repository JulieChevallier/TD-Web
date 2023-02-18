<form method="post" action="frontController.php?controller=trajet&action=created">
    <fieldset class="fieldsetMilieu">
        <legend>Créer un trajet :</legend>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="depart_id">Départ</label>
            <input class="InputAddOn-field" type="text" placeholder="Paris" name="depart" id="depart_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="arrivee_id">Arrivée</label>
            <input class="InputAddOn-field" type="text" placeholder="Montpellier" name="arrivee" id="arrivee_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="date_id">Date</label>
            <input class="InputAddOn-field" type="text" placeholder="2022-12-22" name="date" id="date_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="nb_place_id">Nombre de places</label>
            <input class="InputAddOn-field" type="number" placeholder="2" name="places" id="nb_place_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="prix_id">Prix</label>
            <input class="InputAddOn-field" type="number" placeholder="22" name="prix" id="prix_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="login_id">Conducteur</label>
            <input class="InputAddOn-field" type="text" placeholder="chevallierj" name="login" id="login_id" required/>
        </div>
        <div class="InputAddOn">
            <input class="InputAddOn-field" type="submit" value="Envoyer" />
        </div>
    </fieldset>
</form>