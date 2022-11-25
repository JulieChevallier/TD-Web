<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Formulaire passager </title>
</head>

<body>

<form method="get" action="frontController.php?controller=trajet&action=created">
    <fieldset>
        <legend>Modifier un trajet :</legend>
        <p>
            <label for="trajet_id">Id</label> :
            <input type="text" readonly value="<?= $trajet->getId();?>" name="id" id="trajet_id" required/>
        </p>
        <p>
            <label for="depart_id">Départ</label> :
            <input type="text" value="<?= $trajet->getPDepart();?>" placeholder="Nimes" name="depart" id="depart_id" required/>
        </p>
        <p>
            <label for="arrivee_id">Arrivée</label> :
            <input type="text" value="<?= $trajet->getPArrivee();?>" placeholder="Paris" name="arrivee" id="arrivee_id" required/>
        </p>
        <p>
            <label for="date_id">Date</label> :
            <input type="text" value="<?= $trajet->getDate();?>" placeholder="2022-09-29" name="date" id="date_id" required/>
        </p>
        <p>
            <label for="nb_place_id">Nombre de places</label> :
            <input type="number" value="<?= $trajet->getnbPlaces();?>" placeholder="5" name="places" id="nb_place_id" required/>
        </p>
        <p>
            <label for="prix_id">Prix</label> :
            <input type="number" value="<?= $trajet->getPrix();?>" placeholder="12" name="prix" id="prix_id" required/>
        </p>
        <p>
            <label for="login_id">Conducteur</label> :
            <input type="text" value="<?= $trajet->getconducteurLogin();?>"placeholder="tnalix" name="login" id="login_id" required/>
        </p>
        <p>
            <input type='hidden' name='action' value='updated'>
            <input type='hidden' name='controller' value='trajet'>
            <input type="submit" value="Envoyer" />
        </p>
    </fieldset>
</form>
</body>
</html>