<?php

namespace App\Covoiturage\Model\Repository;
use App\Covoiturage\Model\DataObject\Utilisateur as Utilisateur;

class UtilisateurRepository extends AbstractRepository {

    protected function getNomsColonnes(): array {
        return array('login', 'nom', 'prenom', 'mdpHache','estAdmin', 'email', 'emailAValider', 'nonce');
    }
    function getNomTable(): string {
        return "utilisateur";
    }
    function getNomClePrimaire(): string {
        return "login";
    }

    public function construire(array $utilisateurFormatTableau) : Utilisateur {
        return new Utilisateur(
            $utilisateurFormatTableau['login'],
            $utilisateurFormatTableau['nom'],
            $utilisateurFormatTableau['prenom'],
            $utilisateurFormatTableau['mdpHache'],
            $utilisateurFormatTableau['estAdmin'],
            $utilisateurFormatTableau['email'],
            $utilisateurFormatTableau['emailAValider'],
            $utilisateurFormatTableau['nonce']
        );
    }

//    public static function getUtilisateurs() : array {
//        $pdoStatement = DatabaseConnection::getPdo()->query("SELECT * FROM utilisateur");
//
//        $utilisateurs = [];
//        foreach($pdoStatement as $utilisateurFormatTableau) {
//            $utilisateurs[] = static::construire($utilisateurFormatTableau);
//        }
//
//        return $utilisateurs;
//    }

//    public static function getUtilisateurParLogin(string $login) : ?Utilisateur {
//        $sql = "SELECT * from utilisateur WHERE login = :loginTag";
//        $pdoStatement = DatabaseConnection::getPdo()->prepare($sql);
//
//        $values = array(
//            ":loginTag" => $login,
//            //nomdutag => valeur, ...
//        );
//        $pdoStatement->execute($values);
//
//        $login = $pdoStatement->fetch();
//        if(!$login){
//            return null;
//        }
//        return static::construire($login);
//    }
}
?>