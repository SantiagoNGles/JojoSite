<?php
function validerMotDePasse($mdp) {
    // Vérifier la longueur du mot de passe
    if (strlen($mdp) < 12) {
        return false;
    }

    // Vérifier la présence de lettres minuscules, majuscules, chiffres et caractères spéciaux
    if (!preg_match("/[a-z]/", $mdp) || !preg_match("/[A-Z]/", $mdp) || !preg_match("/[0-9]/", $mdp) || !preg_match("/[^a-zA-Z0-9]/", $mdp)) {
        return false;
    }

    return true;
}