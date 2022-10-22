<?php

namespace App\Covoiturage\Controller;
use App\Covoiturage\Model\Repository\AbstractRepository;
use App\Covoiturage\Model\Repository\UtilisateurRepository as UtilisateurRepository;
use App\Covoiturage\Model\DataObject\Utilisateur as Utilisateur;

class ControllerUtilisateur extends AbstractController{
    public static function readAll(): void {
        $utilisateurs = (new UtilisateurRepository())->selectAll(); //appel au modèle pour gerer la BD
        self::afficheVue('view.php',
            ["utilisateurs" => $utilisateurs,"pagetitle" => "Liste des utilisateurs", "cheminVueBody" => "utilisateur/list.php"]);
    }

    public static function read(): void {
        $utilisateur = (new UtilisateurRepository())->select($_GET['login']);
        if ($utilisateur) {
            self::afficheVue('view.php',
                ["utilisateur" => $utilisateur, "pagetitle" => "Utilisateur", "cheminVueBody" => "utilisateur/detail.php"]);
        } else {
            self::afficheVue('view.php',
                ["pagetitle" => "Erreur", "cheminVueBody" => "voiture/erreur.php"]);
        }
    }

    public static function create(): void {
        self::afficheVue('view.php',
            ["pagetitle" => "Creation", "cheminVueBody" => "utilisateur/create.php"]);
    }

    public static function created(): void {
        $utilisateur = new Utilisateur($_POST['login'], $_POST['nom'], $_POST['prenom']);
        (new UtilisateurRepository())->sauvegarder($utilisateur);
        $utilisateurs = (new UtilisateurRepository())->selectAll();
        self::afficheVue('view.php',
            ["utilisateurs" => $utilisateurs,"pagetitle" => "Crée", "cheminVueBody" => "utilisateur/created.php"]);
    }

    public static function update(): void {
        $utilisateur = (new UtilisateurRepository())->select($_GET['login']);
        self::afficheVue('view.php',
            ["utilisateur" => $utilisateur, "pagetitle" => "Modification", "cheminVueBody" => "utilisateur/update.php"]);
    }

    public static function updated(): void {
        $utilisateur = new Utilisateur($_GET['login'], $_GET['nom'], $_GET['prenom']);
        (new UtilisateurRepository())->update($utilisateur);
        $utilisateurs = (new UtilisateurRepository())->selectAll();
        self::afficheVue('view.php',
            ["login" => $utilisateur->getLogin(),"utilisateurs" => $utilisateurs,"pagetitle" => "Updated", "cheminVueBody" => "utilisateur/updated.php"]);
    }

    public static function delete(): void {
        $login = $_GET['login'];
        (new UtilisateurRepository())->supprimer($login);
        $utilisateurs = (new UtilisateurRepository())->selectAll();
        self::afficheVue('view.php',
            ["utilisateurs" => $utilisateurs,"login" => $login, "pagetitle" => "Suppression", "cheminVueBody" => "utilisateur/deleted.php"]);
    }

    public static function error(string $errorMessage = "") {
        self::afficheVue("view.php",
            ["errorMessage" => $errorMessage,"pagetitle" => "Erreur", "cheminVueBody" => "utilisateur/erreur.php"]);
    }
}