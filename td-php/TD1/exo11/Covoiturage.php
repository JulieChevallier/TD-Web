<?php
require_once "Utilisateur.php";
require_once "Trajet.php";

$user1 = new Utilisateur("tamere", "la","prof");
$user2 = new Utilisateur("tonpere", "le","chauve");
$user3 = new Utilisateur("tadaronne", "la","cuisiniere");

$traj1 = new Trajet("1","Paris","Montpellier","06-09-22",5,20,$user1->getLogin());
$traj2 = new Trajet("2","Moscu","Lune","25-12-22",3,10,$user2->getLogin());
$traj3 = new Trajet("3","Rio","Berlin","12-07-16",7,15,$user3->getLogin());

$trajets = [
    1 => $traj1,
    2 => $traj2,
    3 => $traj3
];

//$id =$_GET['id'];
//$depart=$_GET['depart'];
//$arrivee=$_GET['arrivee'];
//$date=$_GET['date'];
//$nblaces=$_GET['nbplaces'];
//$prix=$_GET['prix'];
//$conduc=$_GET['conduc'];
//$traj = new Trajet($id,$depart,$arrivee,$date,$nblaces,$prix,$conduc);
//
//$trajets[] = $traj;

echo "<ul> liste des trajets : <br><br>";
for ($i = 0; $i < count(array_keys($trajets)); $i++) {
    $cle = array_keys($trajets)[$i];
    $valeur = $trajets[$cle];
    echo '<li>'.$valeur->afficher() .'</li>';
}
echo "</ul>";



