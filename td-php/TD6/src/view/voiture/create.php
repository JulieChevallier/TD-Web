<form method="post" action="frontController.php?controller=voiture&action=created">
    <fieldset>
        <legend>Créer une voiture :</legend>
        <p>
            <label for="immat_id">Immatriculation</label> :
            <input type="text" placeholder="256AB34" name="immatriculation" id="immat_id" required/>
        </p>
        <p>
            <label for="color_id">Couleur</label> :
            <input type="text" placeholder="Rouge" name="couleur" id="color_id" required/>
        </p>
        <p>
            <label for="marque_id">Marque</label> :
            <input type="text" placeholder="Tesla" name="marque" id="marque_id" required/>
        </p>
        <p>
            <label for="nb_siege_id">Nombre de sièges</label> :
            <input type="number" placeholder="5" name="sieges" id="nb_siege_id" required/>
        </p>
        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
    <!--    On appelle ca des querystring-->
</form>