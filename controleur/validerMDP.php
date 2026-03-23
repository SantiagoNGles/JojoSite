<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mdp = $_POST["mdp"];
}

include_once "$racine/modele/validationMDP.inc.php";

if (validerMotDePasse($mdp)) {
    echo "Mot de passe valide.";
} else {
    echo "Le mot de passe ne respecte pas les critères de l'ANSSI. Attention !";
}