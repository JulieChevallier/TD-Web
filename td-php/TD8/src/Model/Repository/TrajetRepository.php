<?php

namespace App\Covoiturage\Model\Repository;
use App\Covoiturage\Model\DataObject\Trajet;

class TrajetRepository extends AbstractRepository {
    public function construire(array $trajetTableau) : Trajet {
        return new Trajet(
            $trajetTableau["id"],
            $trajetTableau["depart"],
            $trajetTableau["arrivee"],
            $trajetTableau["date"],
            $trajetTableau["nbPlaces"],
            $trajetTableau["prix"],
            $trajetTableau["conducteurLogin"],
        );
    }

    protected function getNomTable(): string{
        return 'trajet';
    }

    protected function getNomClePrimaire(): string{
        return "id";
    }

    protected function getNomsColonnes(): array{
        return array('id','depart', 'arrivee', 'date', 'nbPlaces', 'prix', 'conducteurLogin');
    }














//    public static function getTrajets() : array {
//        $pdoStatement = DatabaseConnection::getPDO()->query("SELECT * FROM trajet");
//
//        $trajets = [];
//        foreach($pdoStatement as $trajetFormatTableau) {
//            $trajets[] = static::construire($trajetFormatTableau);
//        }
//
//        return $trajets;
//    }

//    public static function getPassagers($id) : ?array{
//        $sql = "SELECT u.* FROM trajet t INNER JOIN passager p ON t.id = p.trajetID
//                INNER JOIN utilisateur u ON p.passagerLogin = u.login WHERE t.id = :idTag ";
//        $pdoStatement = DatabaseConnection::getPdo()->prepare($sql);
//        $values = array(
//            "idTag" => $id,
//        );
//        $pdoStatement->execute($values);
//
//        $utilisateurs = [];
//        foreach($pdoStatement as $utilisateurFormatTableau) {
//            $utilisateurs[] = Trajet::construire($utilisateurFormatTableau);
//        }
//        return $utilisateurs;
//    }

//    public static function getTrajetParId(string $id) : ?Trajet {
//        $sql = "SELECT * from trajet WHERE id = :idTag";
//        $pdoStatement = DatabaseConnection::getPdo()->prepare($sql);
//
//        $values = array(
//            ":idTag" => $id,
//        );
//        $pdoStatement->execute($values);
//
//        $id = $pdoStatement->fetch();
//        if(!$id){
//            return null;
//        }
//        return static::construire($id);
//    }
}