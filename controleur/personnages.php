<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Page des personnages";
include "$racine/vue/entete2.html.php";
include "$racine/vue/vuePersonnages.php";
include "$racine/vue/pied.html.php";