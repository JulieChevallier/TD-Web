
<?php
echo "</br>";
echo "<b>Lire utilisateur :</b>";
/** @var ModelUtilisateur $utilisateurs */
foreach ($utilisateurs as $utilisateur) {
    $loginHTML = htmlspecialchars($utilisateur->getLogin());
    $loginURL = rawurlencode($utilisateur->getLogin());
    echo "<p>
    Login Utilisateur
    <a href=\"./frontController.php?controller=utilisateur&action=read&controller=utilisateur&login={$loginURL}\"> {$loginHTML} </a>
    </p>";
}

echo "</br>";
echo "<b>Supprimer utilisateur :</b>";
foreach ($utilisateurs as $utilisateur) {
    $loginHTML = htmlspecialchars($utilisateur->getLogin());
    $loginURL = rawurlencode($utilisateur->getLogin());
    echo "<p>
    Login Utilisateur
    <a href=\"./frontController.php?controller=utilisateur&action=delete&login={$loginURL}\"> {$loginHTML} </a>
    </p>";
}


echo "</br>";
echo "<b>Modifier utilisateur :</b>";
foreach ($utilisateurs as $utilisateur) {
    $loginHTML = htmlspecialchars($utilisateur->getLogin());
    $loginURL = rawurlencode($utilisateur->getLogin());
    echo "<p>
    Login Utilisateur
    <a href=\"./frontController.php?controller=utilisateur&action=update&login={$loginURL}\"> {$loginHTML} </a>
    </p>";
}
?>

