<form method="post" action="frontController.php?action=enregistrerPreference">
    <input type="radio" checked id="voitureId" name="controleur_defaut" value="voiture">
    <label for="voitureId">Voiture</label>
    <input type="radio" id="utilisateurId" name="controleur_defaut" value="utilisateur">
    <label for="utilisateurId">Utilisateur</label>
    <input type="radio" id="trajetId" name="controleur_defaut" value="trajet">
    <label for="trajetId">Trajet</label>
    <div>
        <input type="submit" value="Envoyer" />
    </div>
</form>
