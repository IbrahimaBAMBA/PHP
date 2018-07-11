<html>
    <head>
        <title>Exercice9</title>
    </head>
    <body>
        <?php
        $array = array ('02' => 'Aisne', '59' => 'Nord',' 60' => 'Oise',
            '62' => 'Pas-de-Calais', '80' => 'Somme');
        foreach ($array as $area)                     //affiche les valeurs pas les indices
            {
            echo $area . '</br>';
        }
        ?>

    </body>
</html>
