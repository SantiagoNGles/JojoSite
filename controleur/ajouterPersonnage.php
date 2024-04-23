<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "$racine/modele/bd.inc.php";
include_once "$racine/modele/bd.personnages.inc.php";

if ($_GET['action'] == 'ajouterPersonnage') {

        if ($_POST["prenom"] != "" && $_POST["nom"] != "" && $_POST["idPartie"]) {
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $idPartie = $_POST['idPartie'];

            $idPerso = ajouterPersonnage($prenom, $nom);
            
            ajouterDansFigurer($idPerso, $idPartie);

            header('Location: ./?action=personnages');
            exit();
        }

}