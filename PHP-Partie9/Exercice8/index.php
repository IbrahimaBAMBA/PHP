<!DOCTYPE html> 
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice8</title>
    </head>
    <body>
        <?php
        //La date du jour
        $date = '2017-12-31';
//Cette ligne affche la date du jour - 22 jours
        echo 'La date du jour - 22 jours =' . ' ' . date('d-m-Y', strtotime($date . ' - 22 DAY'));
        ?><br /><?php
            //On crée une date, auquel on ajoute une valeur
            $dateToday = new DateTime();
            $dateToday->sub(new DateInterval('P22D'));
            //On affiche le résultat
            echo $dateToday->format('d/m/Y');
        ?>
        ?>
    </body>
</html>
