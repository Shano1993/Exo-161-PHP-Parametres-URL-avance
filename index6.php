<?php

if (isset($_GET['batiment']) && isset($_GET['salle'])) {
    $valeur = $_GET['batiment'];
    $valeur1 = $_GET['salle'];
    echo "Les clés 'batiment et salle' existent" . "<br>";
} else {
    echo "Les clé 'batiment et salle' n'existent pas !";
}