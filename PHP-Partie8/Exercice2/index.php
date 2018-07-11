<?php
//On démarre la session
session_start();
//On définit  les variables de session
$_SESSION['firstname'] = 'Fabrice';
$_SESSION['name'] = 'BUREL';
$_SESSION['age'] = 30;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>exercice2 index.php</title>
    </head>
    <body>
        <h1>Partie 8 PHP</h1>
        <h2>Exercice2</h2>
        <p>Bienvenue sur la page d'accueil</p>
        <a href="user.php" title="Profil"><input type="button" value="Profil Utilisateur" name="profil"></a>
        <a href="../index.php" title="Accueil"><input type="button" value="Accueil partie 8" name="accueil"></a>
    </body>
</html>
//<?php
////ferme provisoirement la session sans la détruire
//session_write_close();
//?>

//<?php
////On démarre la session
//session_start();
////On définit  les variables de session
//$_SESSION['firstname'] = 'Fabrice';
//$_SESSION['name'] = 'BUREL';
//$_SESSION['age'] = 30;
//?>
<!--<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>exercice2 index.php</title>
    </head>
    <body>
        <h1>Partie 8 PHP</h1>
        <h2>Exercice2</h2>
        <p>Bienvenue sur la page d'accueil</p>
        <a href="user.php" title="Profil"><input type="button" value="Profil Utilisateur" name="profil"></a>
        <a href="../index.php" title="Accueil"><input type="button" value="Accueil partie 8" name="accueil"></a>
    </body>
</html>-->
//<?php
////ferme provisoirement la session sans la détruire
//session_write_close();
//?>
