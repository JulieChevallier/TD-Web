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

    /**
     * @return mixed
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }



    // une methode d'affichage.
    public function afficher()
    {
        echo "
        $this->marque 
        $this->couleur 
        $this->immatriculation 
        $this->nbSieges";
    }
}
$marque = 'vroum';
$couleur = 'oui-oui';
$immatriculation = '69';
$nbSieges = 2;
$test = new Voiture($marque,$couleur,$immatriculation,$nbSieges);
//echo $test->afficher();
?>