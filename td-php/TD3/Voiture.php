<?php

class Voiture
{

    private string $marque;
    private string $couleur;
    private string $immatriculation;
    private int $nbSieges; // Nombre de places assises

    // un getter
    public function getMarque(): string
    {
        return $this->marque;
    }

    // un setter
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    // un constructeur
    public function __construct(
        $marque,
        $couleur,
        $immatriculation,
        $nbSieges
    )
    {
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->immatriculation = $immatriculation;
        $this->nbSieges = $nbSieges;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getImmatriculation(): string
    {
        return $this->immatriculation;
    }

    public function getNbSieges(): int
    {
        return $this->nbSieges;
    }


    public function afficher()
    {
        echo "
        $this->marque 
        $this->couleur 
        $this->immatriculation 
        $this->nbSieges";
    }

    public static function construire(array $voitureFormatTableau) : Voiture {
        $voiture = new Voiture($voitureFormatTableau['marque'],$voitureFormatTableau['couleur'], $voitureFormatTableau['immatriculation'],$voitureFormatTableau['nbSieges']);
        return $voiture;
    }

    public static function getVoitures(): array{
        $pdoStatement = Model::getPdo()->query('SELECT * FROM voiture');

        $voitureFormatTableau = $pdoStatement->fetch();
        //var_dump($voitureFormatTableau);
        $tableau[] = Voiture::construire($voitureFormatTableau);
        foreach($pdoStatement as $voitureFormatTableau){
            $tableau[] = Voiture::construire($voitureFormatTableau);;
        }
        return $tableau;
    }


    public static function getVoitureParImmat(string $immatriculation) : ?Voiture {
        $sql = "SELECT * from voiture WHERE immatriculation=:immatriculationTag";
        $pdoStatement = Model::getPdo()->prepare($sql);

        $values = array(
            "immatriculationTag" => $immatriculation,
            //nomdutag => valeur, ...
        );
        $pdoStatement->execute($values);

        $voiture = $pdoStatement->fetch();
        if(!$voiture){
            return null;
        }
        return static::construire($voiture);
    }

    public function sauvegarder() : void {
        $sql = "INSERT INTO voiture (marque, couleur, immatriculation, nbSieges) VALUES (:marqueTag, :couleurTag,:immatriculationTag, :nbSieges)";
        // Préparation de la requête
        $pdoStatement = Model::getPdo()->prepare($sql);

        $values = array(
            ":immatriculationTag" => $this->immatriculation,
            ":couleurTag" => $this->couleur,
            ":marqueTag" => $this->marque,
            ":nbSieges" => $this->nbSieges,
        );
        // On donne les valeurs et on exécute la requête
        $pdoStatement->execute($values);

        // On récupère les résultats comme précédemment
        // Note: fetch() renvoie false si pas de voiture correspondante
    }



}
$marque = 'vroum';
$couleur = 'oui-oui';
$immatriculation = '69';
$nbSieges = 2;
$test = new Voiture($marque,$couleur,$immatriculation,$nbSieges);
//echo $test->afficher();
?>
