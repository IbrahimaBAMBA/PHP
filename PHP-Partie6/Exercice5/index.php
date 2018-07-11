<html>
    <head>
        <title>Exercice5</title>
    </head>
    <body>
        <a href="recup.php? index.php?semaine=12">recup</a>    
        <?php
        if (isset($_GET['semaine=12'])){//on verifie la variable existe
            echo $_GET['semaine=12'];//on l'affiche
        } else {
            echo 'renseigner la semaine !';//si non on affiche le message d'erreur
        }
        ?>
         </body>
</html>

         <!-- Latest compiled and minified CSS 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Index Php 6</title>
    </head>
    <body>
        //<?php
//        //recupérétion du jour de la semaine
//        if (!empty($_GET)) { 
//        // affichage avec une phrase 
//            echo 'Bonjour ' . $_GET['semaine'] . ' !';
//        } else { 
//        // affichage d'un message d'erreur en cas de probleme
//            echo ' Problème !';
        

    