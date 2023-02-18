<?php
$marqueHTML = htmlspecialchars($voiture->getMarque());
$couleurHTML = htmlspecialchars($voiture->getCouleur());
$nbSiegesHTML = htmlspecialchars($voiture->getNbSieges());
$immatHTML = htmlspecialchars($voiture->getImmatriculation());

echo "<ul>
        <li>Marque : ". $marqueHTML . "</li>
        <li>Couleur : " . $couleurHTML . "</li>
        <li>Nombre Sieges : " . $nbSiegesHTML . "</li>
        <li>Immatriculation : " . $immatHTML . "</li>
        </ul>";