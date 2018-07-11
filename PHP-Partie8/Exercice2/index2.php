<?php
// On démarre la session
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>exercice2-user</title>
    </head>
    <body>
        <h1>Partie 8 PHP</h1>
        <h2>Exercice2 user.php</h2>
        <!-- Récupération des valeurs des variables de session -->
        <p><?php echo 'Votre Prénom est : ' . $_SESSION['firstname']; ?></p>
        <p><?php echo 'Votre nom est : ' . $_SESSION['name']; ?></p>
        <p><?php echo 'Et vous avez : ' . $_SESSION['age']; ?></p>
        <a href="index.php" alt="Accueil"><input type="button" value="Accueil exercice 2" name="Accueil"></a>
    </body>
</html>
<?php
//Détruit les variables
session_unset();
//Détruit la session
session_destroy();
?>