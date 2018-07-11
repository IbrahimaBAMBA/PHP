<html>
    <head>
        <title>Exercice10</title>
    </head>
    <body>
        <?php
           //on crée un tableau
         $array = array ('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise',
            '62' => 'Pas-de-Calais', '80' => 'Somme');
         //on fait une boucle pour parcourrir le tableau
        foreach ($array as $cle => $area)             //donner des noms plus explicites
        {
            //on affiche l'indice et le departement
            echo '[' . $cle . '] correspond ' . $area . '</br>';
        }
        ?>

    </body>
</html>
