<?php
    /** @var ModelVoiture $voiture */
    $immatHTML = htmlspecialchars($voiture->getImmatriculation());
    $couleurHTML = htmlspecialchars($voiture->getCouleur());
    $marqueHTML = htmlspecialchars($voiture->getMarque());
    $nbSiegesHTML = htmlspecialchars($voiture->getNbSieges());
    echo "<p>
    Voiture de marque {$marqueHTML}, 
    de couleur {$couleurHTML}, 
    d'immatriculation {$immatHTML}, 
    et de nbSieges {$nbSiegesHTML}
    </p>
    ";
?>