<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Mon premier php </title>
</head>

<body>
Voici le résultat du script PHP :
<?php
// Ceci est un commentaire PHP sur une ligne
/* Ceci est le 2ème type de commentaire PHP
sur plusieurs lignes */

// On met la chaine de caractères "hello" dans la variable 'texte'
// Les noms de variable commencent par $ en PHP
$texte = "hello world !";

// On écrit le contenu de la variable 'texte' dans la page Web
echo $texte;

//LES TABLEAUX
$utilisateur = array(
    'prenom' => 'Juste',
    'nom'    => 'Leblanc'
);
$utilisateur = [
    'prenom' => 'Juste',
    'nom'    => 'Leblanc'
];
$utilisateur['passion'] = 'maquettes en allumettes';
$utilisateur[] = "Nouvelle valeur";

//foreach ($mon_tableau as $cle => $valeur){
    //commandes
//}
//for ($i = 0; $i < count($utilisateur); $i++) {
//    echo $utilisateur[$i];
//}
echo "<br> <br>";
for ($i = 0; $i < count(array_keys($utilisateur)); $i++) {
    $cle = array_keys($utilisateur)[$i];
    $valeur = $utilisateur[$cle];
    //commandes
    echo $cle ." -> ". $valeur . "\n";
    echo "<br>";
}


$marque = 'vroum';
$couleur = 'oui-oui';
$immatriculation = '69';
$nbSieges = 2;

echo "Voiture ". $immatriculation ." de marque ". $marque ." (couleur ". $couleur .", ". $nbSieges ." sieges)";

$voiture = [
    'immatriculation'    => '69',
    'marque' => 'vroum',
    'couleur'    => 'oui-oui',
    'nbSieges'    => 2
];

echo "<ul> liste de voitures :";
for ($i = 0; $i < count(array_keys($voiture)); $i++) {
    $cle = array_keys($voiture)[$i];
    $valeur = $voiture[$cle];
    echo "<li>" . $cle . " -> " . $valeur . "</li>";
}
echo "</ul>";


class Voiture
{

    private $marque;
    private $couleur;
    private $immatriculation;
    private $nbSieges; // Nombre de places assises

    // un getter
    public function getMarque()
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
$test = new Voiture($marque,$couleur,$immatriculation,$nbSieges);
echo $test->afficher();




?>
</body>
</html>