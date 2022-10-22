<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Formulaire passager </title>
</head>

<body>

<form method="post" action="frontController.php?controller=trajet&action=created">
    <fieldset>
        <legend>Créer un trajet :</legend>
        <p>
            <label for="depart_id">Départ</label> :
            <input type="text" placeholder="Montpellier" name="depart" id="depart_id" required/>
        </p>
        <p>
            <label for="arrivee_id">Arrivée</label> :
            <input type="text" placeholder="Paris" name="arrivee" id="arrivee_id" required/>
        </p>
        <p>
            <label for="date_id">Date</label> :
            <input type="text" placeholder="2022-12-22" name="date" id="date_id" required/>
        </p>
        <p>
            <label for="nb_place_id">Nombre de places</label> :
            <input type="number" placeholder="2" name="places" id="nb_place_id" required/>
        </p>
        <p>
            <label for="prix_id">Prix</label> :
            <input type="number" placeholder="100" name="prix" id="prix_id" required/>
        </p>
        <p>
            <label for="login_id">Conducteur</label> :
            <input type="text" placeholder="chevallierj" name="login" id="login_id" required/>
        </p>
        <p>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
</form>
</body>
</html>