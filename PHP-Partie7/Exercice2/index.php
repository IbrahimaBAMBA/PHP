<html>
    <head>
        <title>Exercice2</title>
    </head>
    <body>
        <!--<form action="user.php" method="POST">
            <!-- Création de formulaire avec nom et prenom--><!--
            <label for="nom">Nom<input type='text'name="nom" /></label></br>
            <label for="prenom">Prenom<input type='text'name="prenom" /></label></br>
            <input type="submit" value="ok">
        </form>-->
        
        Création du formulaire avec la methode post
        <form method="POST" action="user.php">
            <label for="nom">Nom
                <input type="text" name="nom" placeholder="Ex : Dupres"/>
            </label>
            <label for="prenom">Prénom
                <input type="text" name="prenom" placeholder="Ex : Aurelien"/>
            </label>
            <input type="submit" value="Valider"/>

    </body>
</html>
