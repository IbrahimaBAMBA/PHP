<html>
    <head>
        <title>Exercice6</title>
    </head>
    <body>
        <a href="recup.php? index.php?batiment=12&salle=101">recup</a> 
        <?php
        if (isset($_GET['batiment=12']) AND isset($_GET['salle=101'])){  //on verifie que les parametres existent
            echo $_GET['batiment=12']. ' ' . $_GET['salle=101'] . '</br>'; //si oui on les affiche 
        } else {
            echo 'trouver le bon emplacement !';//si non on affiche le message d'erreur
        }
        ?>
         <!-- Latest compiled and minified CSS 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Index Php 6</title>
    </head>
    <body>
        <?php
//        //recupération des informations
//        if (isset($_GET['batiment']) && isset($_GET['salle'])) { 
//        //affichage des informations avec context 
//            echo 'Bonjour ' . $_GET['batiment'] . ' ' . $_GET['salle'] . ' !';
//        } else { 
//        // affichage d'un message d'erreur
//            echo ' Problème !';
//        }
        ?>-->

    </body>
</html>
