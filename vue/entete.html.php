<!DOCTYPE HTML PUBLIC>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <title><?php echo $titre ?></title>
    <style type="text/css">
            @import url("css/style.css");
            @import url("css/stylePersonnages.css");
        </style>

</head>

<boby>

    <header>

        <img src="img/jojo.jpg" class="logo" alt="Logo de Jojo's Bizarre Adventure">
        <hr>

    </header>

    <nav>

        <ul class="rect1">

            <li>
                <a href="vue/vuePersonnages.php">Personnages</a>
            </li>

        </ul>

        <ul class="rect2">
            
            <?php if (isLoggedOn()) { ?>
                <li><a href="./?action=profil" target="_blank" alt="Ce lien mène vers le profil">Mon Profil</a></li>
            <?php } else { ?>
                <li><a href="./?action=connexion" target="_blank" alt="Ce lien mène vers la page de connexion">Connexion</a></li>
            <?php } ?>

        </ul>

    </nav>