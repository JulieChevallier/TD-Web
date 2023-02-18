<?php
echo '<p>
        <a href="./frontController.php?controller=utilisateur&action=create">Créer un utilisateur</a>
      </p>
      <div class="container">';
foreach ($utilisateurs as $utilisateur) {
    $utilHTML = htmlspecialchars($utilisateur->getLogin());
    $utilURL = rawurlencode($utilisateur->getLogin());
    echo '<a class="box" href="./frontController.php?controller=utilisateur&action=read&login=' . $utilURL . '">
            <div>
                <span> Utilisateur :</span> '
        . $utilHTML .
        '</div>
           </a>';
}
echo '</div>';