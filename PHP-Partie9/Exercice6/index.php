<!DOCTYPE html>  
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice6</title>
    </head>
    <body>
        <?php
        $date1 = new DateTime('01-02-2016');
//le nombre de jours dans un mois
        echo 'Nombre de jour du mois:' . ' ' . $num = $date1->format('t');
        ?>

    </body>
</html>
