<?php

if (isset($_GET['nom']) && isset($_GET['prenom'])) {
    $valeur = $_GET['nom'];
    $valeur1 = $_GET['prenom'];
    echo "Les clés 'nom et prenom' sont bien présente" . "<br>";
}
else {
    echo "Les clé 'nom et prenom' n'existent pas !";
}








