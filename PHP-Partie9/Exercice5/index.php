<!DOCTYPE html> 
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice5</title>
    </head>
    <body>
        <?php
        $date1 = new DateTime('16-05-2016');
        $date2 = new DateTime();
        $interval = $date1->diff($date2);

//le nombre de jours d'écart
        echo'Nombre de jour:' . ' ' . $interval->format('%a');
        ?>
        <!-- nombre d'année de mois et de jours
 echo $interval->format('%y ans,%m mois, %d jour');-->

    </body>   
</html>
