<html>
    <head>
        <title>Exercice4</title>
    </head>
    <body>
        <a href="recup.php? index.php?langage=PHP&serveur=LAMP">recup</a> 
        <?php
        if(isset($_GET['langage=PHP']) AND isset($_GET['serveur=LAMP']))//verifier si les variables existent
        {
            echo $_GET['langage=PHP'] . ' ' . $_GET['serveur=LAMP']; //si oui afficher on l'affiche
        } else {
            echo 'renseigner la page'; //si non on affiche cette ligne
        }
        ?>
         <!-- Latest compiled and minified CSS 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Index Php 6</title>
    </head>
    <body>
-->        <?php
//        //recupérétion du jour de la semaine
//        if (isset($_GET['semaine'])) { 
//        // affichage avec une phrase 
//            echo 'Bonjour ' . $_GET['semaine'] . ' !';
//        } else { 
//        // affichage d'un message d'erreur en cas de probleme
//            echo ' Problème !';
        
        ?>

    </body>
</html>
