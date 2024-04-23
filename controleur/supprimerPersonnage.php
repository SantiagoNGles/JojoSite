<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/bd.personnages.inc.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        supprimerPersonnage($id);
        
        header('Location: ./?action=personnages');
        exit();
    }
}

// En cas de tentative d'accès direct au fichier sans soumission de formulaire, rediriger vers la page des personnages
header('Location: ./?action=personnages');
exit();