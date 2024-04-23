<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["personnages"] = "personnages.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["ajouterPersonnage"] = "ajouterPersonnage.php";
    $lesActions["supprimerPersonnage"] = "supprimerPersonnage.php";
    $lesActions["modifierPersonnage"] = "modifierPersonnage.php";
    $lesActions["mentions"] = "mentions.php";

    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}