<?php
echo "<ul>
        <li>Id : ". htmlspecialchars($trajet->getId()) . "</li>
        <li>Départ : ". htmlspecialchars($trajet->getPDepart()) . "</li>
        <li>Arrivée : ". htmlspecialchars($trajet->getPArrivee()) . "</li>
        <li>Date : ". htmlspecialchars($trajet->getDate()) . "</li>
        <li>Nombre de places : ". htmlspecialchars($trajet->getNbPlaces()) . "</li>
        <li>Prix : ". htmlspecialchars($trajet->getPrix()) . "</li>
        <li>Conducteur : " . htmlspecialchars($trajet->getConducteurLogin()) . "</li>
        </ul>";
