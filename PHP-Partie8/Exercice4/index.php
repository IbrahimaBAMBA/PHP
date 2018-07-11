<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 4 partie 8 php</title>
  </head>
  <body>
    <p>
        <?php
        // On affiche les cookies crées lors de l'exercice précedent.
        echo($_COOKIE['pseudo'] . ' ' . $_COOKIE['password']);
        ?>
    </p>
    <a href="../index.php">Retour</a>
  </body>
</html>


//<?php //
//if (isset($_GET['login'])AND isset($_GET['password'])){                          // on verifie si le champ existe
//setcookie('login', $_GET['login'], time() + 365*24*3600, null, null,false, true);    //$_GET pour recuperer et garder la valeur du champ 'login' dans un cookie
//setcookie('password',$_GET['password'], time() + 365*24*3600, null, null,false, true);//idem
//
//   
//}
//
//?>
<!--<html>
    <head>
        <title>Exercice3</title>
    </head>
    <body>
        <form action="index.php" method="GET"> on crée le formulaire
            <input type="text" name="login"/>
            <input type="password" name="password"/>
            <input type="submit" value="submit"/>
        </form>
        <?php
        echo $_COOKIE['login'], $_COOKIE['password']; //On recupère les données qui sont dans le cookie pour l'afficher
        ?>

    </body> en somme je recupère les champs du formulaire dans un cookie puis j'affiche les données passées dans le cookie. 
</html>-->