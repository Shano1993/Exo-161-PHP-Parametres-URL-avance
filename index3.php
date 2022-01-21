<?php

if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) {
    $valeur = $_GET['dateDebut'];
    $valeur1 = $_GET['dateFin'];
    echo "Les clés 'dateDebut et dateFin' existent" . "<br>";
}
else {
    echo "Les clé 'dateDebut et dateFin' n'existent pas !";
}
