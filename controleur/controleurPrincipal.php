<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["defaut"] = "accueil.php";
    $lesActions["personnages"] = "personnages.php";
    $lesActions["inscription"] = "inscription.php";
    $lesActions["mentions"] = "mentions.php";

    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }

}