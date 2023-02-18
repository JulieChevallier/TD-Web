<form method="post" action="frontController.php?controller=voiture&action=created">
    <fieldset class="fieldsetMilieu">
        <legend>Créer une voiture :</legend>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="immat_id">Immatriculation</label>
            <input class="InputAddOn-field" type="text" placeholder="123AB45" name="immatriculation" id="immat_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="color_id">Couleur</label>
            <input class="InputAddOn-field" type="text" placeholder="Vert" name="couleur" id="color_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="marque_id">Marque</label>
            <input class="InputAddOn-field" type="text" placeholder="Renault" name="marque" id="marque_id" required/>
        </div>
        <div class="InputAddOn">
            <label class="InputAddOn-item" for="nb_siege_id">Nombre de sièges</label>
            <input class="InputAddOn-field" type="number" placeholder="2" name="sieges" id="nb_siege_id" required/>
        </div>
        <div class="InputAddOn">
            <input class="InputAddOn-field" type="submit" value="Envoyer" />
        </div>
    </fieldset>
</form>
