<main>

    <article class="cadre">

        <h1 id="titre">Création de personnages</h1>
        <div class="container">

            <div class="box1">

                <h2>Les personnages</h2>

            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Partie</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($personnages as $personnage): ?>
                        <tr>
                            <td><?php echo $personnage['idPerso']; ?></td>
                            <td><?php echo $personnage['prenomPerso']; ?></td>
                            <td><?php echo $personnage['nomPerso']; ?></td>
                            <td><?php echo $personnage['idPartie']; ?></td>
                            <td>
                                <form action="./?action=modifierPersonnage" method="post">
                                    <input type="hidden" name="id" value="<?php echo $personnage['idPerso']; ?>">
                                    <label for="prenom">Nouveau prénom:</label>
                                    <input type="text" id="prenom" name="prenom" value="<?php echo $personnage['prenomPerso']; ?>">
                                    <label for="nom">Nouveau nom:</label>
                                    <input type="text" id="nom" name="nom" value="<?php echo $personnage['nomPerso']; ?>">
                                    <input type="submit" value="Modifier">
                                </form>
                                <form action="./?action=supprimerPersonnage" method="post">
                                    <input type="hidden" name="id" value="<?php echo $personnage['idPerso']; ?>">
                                    <input type="submit" value="Supprimer">
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <form action="./?action=ajouterPersonnage" method="post">

                <label for="prenom">Prénom:</label>
                <input type="text" id="prenom" name="prenom">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom">

                <label for="idPartie">Id Partie:</label>
                <select id="idPartie" name="idPartie">
                    <option value="1">Partie 1</option>
                    <option value="2">Partie 2</option>
                    <option value="3">Partie 3</option>
                    <option value="3">Partie 4</option>
                    <option value="3">Partie 5</option>
                    <option value="3">Partie 6</option>
                </select>
                
                <input type="submit" value="Ajouter">

            </form>

        </div>

    </article>

</main>