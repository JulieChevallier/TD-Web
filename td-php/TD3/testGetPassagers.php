<?php
require_once "Model.php";
require_once "Trajet.php";
require_once "Utilisateur.php";

var_dump(Trajet::getPassagers($_GET['trajetID']));