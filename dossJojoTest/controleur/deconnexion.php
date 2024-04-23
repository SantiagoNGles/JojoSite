<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/authentification.inc.php";

logout();

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Page de connexion";
include "$racine/vue/entete2.html.php";
include "$racine/vue/vueConnexion.php";
include "$racine/vue/pied.html.php";