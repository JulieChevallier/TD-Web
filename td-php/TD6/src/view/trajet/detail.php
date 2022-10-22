<?php
/** @var ModelTrajet $trajet */
$idHTML = htmlspecialchars($trajet->getId());
$departHTML = htmlspecialchars($trajet->getPDepart());
$arriveeHTML = htmlspecialchars($trajet->getPArrivee());
$nbPlacesHTML = htmlspecialchars($trajet->getNbPlaces());
$prixHTML = htmlspecialchars($trajet->getPrix());
$conducteurLoginHTML = htmlspecialchars($trajet->getConducteurLogin());
$dateHTML = htmlspecialchars($trajet->getDate());
echo "<p>
    ID Trajet {$idHTML}, 
    départ {$departHTML}, 
    arrivée {$arriveeHTML},
    de nbPlaces {$nbPlacesHTML}, 
    au prix {$prixHTML},
    avec conducteurLogin {$conducteurLoginHTML}, 
    le {$dateHTML}
    </p>
    ";
?>