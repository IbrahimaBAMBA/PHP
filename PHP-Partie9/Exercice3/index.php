<html lang="fr">
    <meta charset="utf-8">
    <head>
        <title>Exercice3</title>
    </head>
    <body>
        //<?php
//        $number_of_the_day = 24;
//        setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
//        echo ucfirst(strftime('%A ' . $number_of_the_day . ' %B %Y'));
//        ?>
        
         <?php
        echo date('l d F Y');
        /* Modifie les informations de localisation
         * LC_TIME pour le format de date et d'heure avec strftime()
         * locale = Français UTF-8
         */
        setlocale(LC_TIME, 'fr_FR.UTF8');
        /* Formate une date/heure locale avec la configuration locale
         * %A = Nom complet du jour de la semaine
         * %e = Jour du mois, avec un espace précédant le premier chiffre. 
         * %B = Nom complet du mois, suivant la locale
         * %Y = L'année, sur 4 chiffres
         */
        echo strftime('%A %e %B %Y');
        ?>
        <a href="../index.php">Retour</a>
    </body>
</html>
