<main>

    <article class="cadre">

        <form class="formulaire" method="POST" action="./?action=connexion">

            <div class="container">

                <b1><label class="information">Connexion</label></b1>
                <br>

                <input type="email" name="email" placeholder="Entrez une adresse mail valide" required>
                <br>
                
                <input type="password" name="mdp" placeholder="Entrez un mot de passe en accord aux recommendations de l'ANSSI" required>
                <br>

                <button id="sauvegarder" type="submit">Se connecter</button>

            </div>

        </form>

        <br>
        Pas encore de compte ? <a href="./?action=inscription">Créez-en un maintenant !</a>

    </article>

</main>