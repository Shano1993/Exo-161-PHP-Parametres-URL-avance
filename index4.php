<?php

if (isset($_GET['langage']) && isset($_GET['serveur'])) {
    echo "Les clés 'langage et serveur' existent" . "<br>";
}
else {
    echo "Les clés 'langage et serveur' n'existent pas";
}