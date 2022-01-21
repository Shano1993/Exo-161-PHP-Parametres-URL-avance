<?php

if (isset($_GET['age'])) {
    $valeur = $_GET['age'];
    echo "La clé 'age' existe et contient la valeur: " . "<br>";
}
else {
    echo "La clé 'age' n'existe pas !";
}



