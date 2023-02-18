<?php

namespace App\Covoiturage\Model\Repository;
use App\Covoiturage\Model\DataObject\AbstractDataObject;
use App\Covoiturage\Model\Repository\DatabaseConnection as DatabaseConnection;
use PDOException;

abstract class AbstractRepository {

    public function sauvegarder(AbstractDataObject $object): bool {
        $sql = "INSERT INTO " . $this->getNomTable() . " (". implode(', ', $this->getNomsColonnes())
            . ") VALUES (:" . implode(', :', $this->getNomsColonnes()) . ")";
        $values = $object->formatTableau();
        $pdoStatement = DatabaseConnection::getPdo()->prepare($sql);
        try {
            $pdoStatement->execute($values);
            return true;
        } catch (PDOException) {
            return false;
        }
    }

    public function update(AbstractDataObject $object): void {
        $ligne = "";
        foreach ($this->getNomsColonnes() as $colonne) {
            $ligne .= $colonne . "= :" . $colonne . ', ';
        };
        $ligne = substr_replace($ligne, " ",-2);
        $sql = "UPDATE {$this->getNomTable()} SET $ligne WHERE {$this->getNomClePrimaire()} = :{$this->getNomClePrimaire()}";
        $values = $object->formatTableau();
        $pdoStatement = DatabaseConnection::getPdo()->prepare($sql);
        $pdoStatement->execute($values);
    }

    public function supprimer($valeurClePrimaire): void {
        $sql = "DELETE FROM {$this->getNomTable()} WHERE {$this->getNomClePrimaire()} = :valueTag";
        $pdoStatement = DatabaseConnection::getPdo()->prepare($sql);
        $value = array("valueTag" => $valeurClePrimaire);
        $pdoStatement->execute($value);
    }

    public function select($valeurClePrimaire) {
        $sql = "SELECT * FROM {$this->getNomTable()} WHERE {$this->getNomClePrimaire() } = :valueTag";
        $pdoStatement = DatabaseConnection::getPdo()->prepare($sql);
        $values = array("valueTag" => $valeurClePrimaire);
        $pdoStatement->execute($values);
        $object = $pdoStatement->fetch();

        return $object ? $this->construire($object) : null;
    }

    public function selectAll(): array {
        $sql = "SELECT * FROM {$this->getNomTable()}";
        $pdoStatement = DatabaseConnection::getPdo()->prepare($sql);
        $pdoStatement->execute();

        foreach ($pdoStatement as $FormatTableau) {
            $object[] = $this->construire($FormatTableau);
        }
        return $object;
    }

    protected abstract function getNomTable(): string;

    protected abstract function getNomClePrimaire(): string;

    protected abstract function construire(array $objetFormatTableau);

    protected abstract function getNomsColonnes(): array;
}

