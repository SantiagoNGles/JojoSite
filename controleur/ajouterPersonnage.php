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
            // Appeler la fonction pour ajouter un personnage avec les valeurs récupérées
            ajouterPersonnage($prenom, $nom);

            // Rediriger l'utilisateur vers la page des personnages
            header('Location: ./?action=personnages');
            exit();
        }

}