<!DOCTYPE HTML PUBLIC>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        <h3><a href="./?action=accueil">Revenir à l'accueil</a></h3>

        <div class="rect">
        
            <a href="./?action=personnages">

                <li>Personnages</li>

            </a>

        </div>

        <ul class="rect">
            
            <?php if (isLoggedOn()) { ?>
                <li><a href="./?action=profil" alt="Ce lien mène vers le profil">Mon Profil</a></li>
            <?php } else { ?>
                <li><a href="./?action=connexion" alt="Ce lien mène vers la page de connexion">Connexion</a></li>
            <?php } ?>

        </ul>

    </nav>