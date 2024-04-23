<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "$racine/modele/bd.inc.php";
include_once "$racine/modele/bd.personnages.php";

if ($_GET['action'] == 'ajouterPersonnage') {

        if ($_POST["prenom"] != "" && $_POST["nom"] != "") {
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            
            ajouterPersonnage($prenom, $nom);

            header('Location: ./?action=personnages');
            exit();
        }

}