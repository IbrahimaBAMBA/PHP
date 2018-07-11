<html>
    <head>
        <title>Exercice3</title>
    </head>
    <body>
        <a href="recup.php? index.php?dateDebut=2/05/2016&dateFin=27/11/2016">recup</a>
        <?php
        if (isset($_GET['dateDebut=2/05/2016']) AND isset($_GET['dateFin=27/11/2016'])) {  //on verifie que les variables existent
            echo $_GET['dateDebut=2/05/2016'] . ' ' . $_GET['dateFin=27/11/2016'] . '</br>'; // si oui on les affiche
        } else {
            echo 'renseigner l\'information !'; //si non on renvoie ce message
        }
        ?>
         <!-- Latest compiled and minified CSS 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Php 6</title>
    </head>
    <body>
        //<?php
//        //recupération du langage et affichage du serveur
//        if (!empty($_GET['langage']) && !empty($_GET['serveur'])) { 
//            echo 'Bonjour ' . $_GET['langage'] . ' ' . $_GET['serveur'] . ' !';
//        } else { 
//        //affichage d'un message d'erreur
//            echo ' Problème !';
//        }
        ?>-->

    </body>
</html>
