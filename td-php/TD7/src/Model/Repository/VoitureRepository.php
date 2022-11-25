<?php
namespace App\Covoiturage\Model\Repository;
use App\Covoiturage\Model\DataObject\Voiture;

class VoitureRepository extends AbstractRepository {

    public function construire(array $voitureFormatTableau) : Voiture {
        $voiture = new Voiture(
            $voitureFormatTableau['marque'],
            $voitureFormatTableau['couleur'],
            $voitureFormatTableau['immatriculation'],
            $voitureFormatTableau['nbSieges']);
        return $voiture;
    }

    protected function getNomTable(): string {
        return 'voiture';
    }

    protected function getNomClePrimaire(): string{
        return "immatriculation";
    }

    protected function getNomsColonnes(): array{
        return array('immatriculation','marque','couleur','nbSieges');
    }
}