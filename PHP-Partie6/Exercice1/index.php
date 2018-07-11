<html>
    <head>
        <title>Exercice1</title>
    </head>
    <body>
          <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>Index Php 6</title>
    </head>
    <body>
   <?php
   //recuperation des données
   if(isset($_GET['nom']) && isset($_GET['prenom'])){
       //affichage des données avec GET et echo
       echo $_GET['nom'] .' '. $_GET['prenom'];
   }
   ?>
      <a class="button" href="http://php6/ex1?nom=Nemare&amp;prenom=Jean/"><button type="button" class="btn btn-primary">Exercice 1</button></a>  
        <a href="recup.php?nom=Nemare&prenom=Jean">recup</a>      
    </body>
</html>
