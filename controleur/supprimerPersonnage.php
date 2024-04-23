<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "modele/bd.personnages.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        // Appeler la fonction pour supprimer le personnage avec l'identifiant récupéré
        supprimerPersonnage($id);
        
        // Rediriger l'utilisateur vers la page des personnages après la suppression
        header('Location: ./?action=personnages');
        exit();
    }
}

// En cas de tentative d'accès direct au fichier sans soumission de formulaire, rediriger vers la page des personnages
header('Location: ./?action=personnages');
exit();