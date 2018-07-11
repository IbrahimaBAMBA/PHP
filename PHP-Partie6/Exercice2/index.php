<html>
    <head>
        <title>Exercice2</title>
    </head>
    <body>
         <a href="recup.php?recup.php?nom=Nemare&prenom=Jean">recup</a>  
        <?php
        if (isset($_GET['age']))//on verifie que 'age' existe
        {
            echo $_GET['age']. 'valide !';//si oui on l'affiche
        } else {
            echo 'renseigner votre age !';//si non il faut 'renseigner votre age'
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
//        //date de debut et de fin
//        if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])) { 
//            echo $_GET['dateDebut'] . ' ' . $_GET['dateFin'] . ' !';
//        } else { 
//        // Il manque des paramètres, on avertit le visiteur
//            echo 'Merci de renseigner des dates valides.';

    