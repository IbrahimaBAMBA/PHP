<!DOCTYPE html>  
<html lang="fr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice7</title>
    </head>
    <body>
        <p>
        <?php
        //La date du jour
$date = '2017-12-31';
//Cette ligne affche la date du jour + 20 jours
echo 'La date du jour + 20 jours ='. ' ' . date('d-m-Y', strtotime($date.' + 20 DAY'));
        ?>
        </p>

    </body>
</html>
