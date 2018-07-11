<html>
    <head>
        <title>Exercice8</title>
    </head>
    <body>
        <?php
        $array = array ('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre');
        for ($mois = 0; $mois < 11; $mois++)
        {
         echo $array[$mois] . '</br>';
        }
        
        ?>
        
         <!--foreach ($month as $separate) {
          echo $separate;
          ?> -->

    </body>
</html>
