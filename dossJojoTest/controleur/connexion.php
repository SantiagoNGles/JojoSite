<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

// recuperation des donnees GET, POST, et SESSION
if (!isset($_POST["email"]) || !isset($_POST["mdp"])){
    // on affiche le formulaire de connexion
    $titre = "Page de connexion";
    include "$racine/vue/entete2.html.php";
    include "$racine/vue/vueConnexion.php";
    include "$racine/vue/pied.html.php";
}
else
{
    $email=$_POST["email"];
    $mdp=$_POST["mdp"];
    
    login($email,$mdp);

    if (isLoggedOn()){ // si l'utilisateur est connecté on redirige vers le controleur monProfil
        include "$racine/controleur/monProfil.php";
    }
    else{
        // l'utilisateur n'est pas connecté, on affiche le formulaire de connexion
        $titre = "Page de connexion";
        include "$racine/vue/entete2.html.php";
        include "$racine/vue/vueConnexion.php";
        include "$racine/vue/pied.html.php";
    }
}