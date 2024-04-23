<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/bd.personnages.inc.php";

$personnages = getAllPersonnages();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Page des personnages";
include "$racine/vue/entete3.html.php";
include "$racine/vue/vuePersonnages.php";
include "$racine/vue/pied2.html.php";