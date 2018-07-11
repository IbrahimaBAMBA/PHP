<html>
    <head>
        <title>user.php</title>
    </head>
    <body>
       <body>
        <p>
            <?php
            //creation de la regex pour le nom et le prenom : permet d'avoir un premier point de securité
            $nameregex = '/^[A-Z]{1}[a-z]+$/';// ^=debut regex , $= fin regex.
            //Si les champs sont rempli et qu'ils sont valident par rapport au regex
            if (!empty($_POST['nom']) && !empty($_POST['prenom']) && preg_match($nameregex, $_POST['nom']) && preg_match($nameregex, $_POST['prenom'])) {
                //alors on echo le resultat
                echo strip_tags($_POST['nom']) . ' ' . strip_tags($_POST['prenom']);// strip_tags= un 2eme point de securite pour ne pas laisser saisir des scripts
                //sinon on affiche un message d'erreur
            } else {
                echo 'Merci de remplir les champs !';
            }
            ?>
        </p>
    </body>
    </body>
</html>
