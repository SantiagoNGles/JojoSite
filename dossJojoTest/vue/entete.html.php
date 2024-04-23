<!DOCTYPE HTML PUBLIC>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titre ?></title>
    <style type="text/css">
        @import url("css/style.css");
    </style>

</head>

<boby>

    <header>

        <img src="img/jojo.jpg" class="logo" alt="Logo de Jojo's Bizarre Adventure">
        <hr>

    </header>

    <nav>

        <div class="rect">

            <a href="./?action=personnages" alt="Ce lien mène vers la page des personnages">

                <li>Personnages</li>

            </a>

        </div>

        <div class="rect">

            <?php if (isLoggedOn()) { ?>


                <a href="./?action=profil" alt="Ce lien mène vers le profil">

                    <li>Mon Profil</li>

                </a>

            <?php } else { ?>

                <a href="./?action=connexion" alt="Ce lien mène vers la page de connexion">

                    <li>Connexion</li>

                </a>

            <?php } ?>

        </div>

    </nav>