<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/bd.personnages.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nouveauPrenom = $_POST['prenom'];
    $nouveauNom = $_POST['nom'];

    modifierPersonnage($id, $nouveauPrenom, $nouveauNom);

    header('Location: ./?action=personnages');
    exit();
}
