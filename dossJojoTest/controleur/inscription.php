<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/bd.utilisateur.inc.php";

$inscrit = false;
$msg="";
// recuperation des donnees GET, POST, et SESSION
if (isset($_POST["email"]) && isset($_POST["mdp"]) && isset($_POST["pseudo"])) {

    if ($_POST["email"] != "" && $_POST["mdp"] != "" && $_POST["pseudo"] != "") {
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
        $pseudo = $_POST["pseudo"];

        // enregistrement des donnees
        $ret = addUtilisateur($email, $mdp, $pseudo);
        if ($ret) {
            $inscrit = true;
        } else {
            $msg = "l'utilisateur n'a pas été enregistré.";
        }
    }
 else {
    $msg="Renseigner tous les champs...";
    }
}

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Page d'inscription";
include "$racine/vue/entete2.html.php";
include "$racine/vue/vueInscription.php";
include "$racine/vue/pied.html.php";