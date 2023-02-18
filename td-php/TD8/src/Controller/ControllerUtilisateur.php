<?php

namespace App\Covoiturage\Controller;
use App\Covoiturage\Lib\ConnexionUtilisateur;
use App\Covoiturage\Lib\MessageFlash;
use App\Covoiturage\Lib\MotDePasse;
use App\Covoiturage\Model\Repository\UtilisateurRepository;
use App\Covoiturage\Model\DataObject\Utilisateur;
use App\Covoiturage\Model\HTTP\Cookie;

class ControllerUtilisateur extends AbstractController {

    // Déclaration de type de retour void : la fonction ne retourne pas de valeur
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
                ["pagetitle" => "Erreur", "cheminVueBody" => "voiture/error.php"]);
        }
    }

    public static function create(): void {
        self::afficheVue('view.php',
            ["pagetitle" => "Creation", "cheminVueBody" => "utilisateur/create.php"]);
    }

    public static function created(): void {
        if ($_POST['mdp'] != $_POST['mdp2']) {
            (new MessageFlash())->ajouter("warning", "Mots de passe distincts");
            self::redirection("?controller=utilisateur&action=create");
        }
        $utilisateur = Utilisateur::construireDepuisFormulaire($_POST);
        (new UtilisateurRepository())->sauvegarder($utilisateur);
        (new MessageFlash())->ajouter("success","L'utilisateur a été créé");
        self::redirection("?controller=utilisateur&action=readAll");
    }

    public static function update(): void {
        $utilisateur = (new UtilisateurRepository())->select($_GET['login']);
        if (!ConnexionUtilisateur::estAdministrateur() || (new ConnexionUtilisateur())->estUtilisateur($utilisateur->getLogin())) {
            (new MessageFlash())->ajouter("danger", "Vous n'avez pas les droits !");
            self::redirection("?controller=utilisateur&readAll");
        }
        self::afficheVue('view.php',
            ["utilisateur" => $utilisateur, "pagetitle" => "Modification", "cheminVueBody" => "utilisateur/update.php"]);
    }

    public static function updated(): void {
        $utilisateur = (new UtilisateurRepository())->select($_GET['login']);
        if (!ConnexionUtilisateur::estAdministrateur() || (new ConnexionUtilisateur())->estUtilisateur($utilisateur->getLogin())) {
            (new MessageFlash())->ajouter("danger","Vous n'avez pas les droits !");
            self::redirection("?controller=utilisateur&readAll");
        }
        if (!MotDePasse::verifier($_GET['oldMdp'], $utilisateur->getMdpHache())) {
            (new MessageFlash())->ajouter("danger","Ancien mot de passe erroné");
            self::redirection("?controller=utilisateur&action=update&login=" . $_GET['login']);
        }
        if ($_GET['mdp'] != $_GET['mdp1']) {
            (new MessageFlash())->ajouter("warning", "Mots de passe distincts");
            self::redirection("?controller=utilisateur&action=update&login=" . $_GET['login']);
        }
        if (ConnexionUtilisateur::estAdministrateur()) {
            $utilisateur->setEstAdmin(array_key_exists('estAdmin', $_GET) && $_GET['estAdmin'] == 'on');
        }
        $utilisateur->setPrenom($_GET['prenom']);
        $utilisateur->setNom($_GET['nom']);
        $utilisateur->setMdpHache($_GET['mdp']);
        (new UtilisateurRepository())->update($utilisateur);
        (new MessageFlash())->ajouter("success","L'utilisateur a été modifié");
        self::redirection("?controller=utilisateur&action=readAll");
    }

    public static function delete(): void {
        $utilisateur = (new UtilisateurRepository())->select($_GET['login']);
        if (!ConnexionUtilisateur::estAdministrateur() || (new ConnexionUtilisateur())->estUtilisateur($utilisateur->getLogin())) {
            (new MessageFlash())->ajouter("danger", "Vous n'avez pas les droits !");
            self::redirection("?controller=utilisateur&readAll");
        }
        (new UtilisateurRepository())->supprimer($_GET['login']);
        (new MessageFlash())->ajouter("success","L'utilisateur a été supprimé");
        self::redirection("?controller=utilisateur&action=readAll");
    }

    public static function error(string $errorMessage = "") {
        self::afficheVue("view.php",
            ["errorMessage" => $errorMessage,"pagetitle" => "Erreur", "cheminVueBody" => "utilisateur/error.php"]);
    }

    public static function connecter(): void {
        $utilisateur = (new UtilisateurRepository())->select($_POST['login']);
        if ($utilisateur) {
            if (MotDePasse::verifier($_POST['mdp'], $utilisateur->getMdpHache())) {
                (new ConnexionUtilisateur())->connecter($utilisateur->getLogin());
                (new MessageFlash())->ajouter("success","L'utilisateur est connecté");
                self::redirection("?controller=utilisateur&action=readAll");
            } else {
                (new MessageFlash())->ajouter("warning","Mot de passe erroné");
                self::redirection("?controller=utilisateur&action=formulaireConnexion");
            }
        } else {
            (new MessageFlash())->ajouter("danger","Utilisateur inconnu");
            self::redirection("?controller=utilisateur&action=formulaireConnexion");
        }
    }

    public static function deconnecter(): void {
        (new ConnexionUtilisateur())->deconnecter();
        (new MessageFlash())->ajouter("success","L'utilisateur est déconnecté");
        self::redirection("?controller=utilisateur&action=readAll");
    }

    public static function formulaireConnexion(): void {
        self::afficheVue('view.php',
            ["pagetitle" => "Connexion", "cheminVueBody" => "utilisateur/formulaireConnexion.php"]);
    }
}
