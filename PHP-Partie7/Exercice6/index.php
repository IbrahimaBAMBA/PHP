<!Doctype html>
<html>
    <head>
        <title>Exercice6</title>
    </head>
    <body>
        <?php
        if (isset($_GET['liste']) AND isset($_GET['nom']) AND isset($_GET['prenom'])) {
            echo $_GET['liste'] . ' ' . $_GET['nom'] . ' ' . $_GET['prenom'];          //si la valeur des champs existent j'affiche leur contenu
        } else {                                                                      //pour verifier la condition j'affiche le formulaire dans le 'else' hors du php 
            ?>
            <form action="index.php" method="GET">
                <select name="liste">
                    <option value="Mme" selected="selected">Mme</option>
                    <option value="Mr">Mr</option>
                </select>
                <label for="nom">nom: </label>
                <input type="text" name="nom" value="" />
                <label for="prenom">prenom: </label>
                <input type="text" name="prenom" value="" />
                <input type="submit" value="Ok"/>
            </form>
            <?php
        }                                                                       //on rouvre le php et on ferme le 'else'. Donc si la valeur des champs existent on les affiche sinon le formulaire reste afficher
        ?>                                                                      

    </body>
</html>
