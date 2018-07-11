<html>
    <head>
        <title>Exercice7</title>
    </head>
    <body>
        <?php
        $tableau = array ('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise','62' => 'Pas-de-Calais', '80 '=> 'Somme');
        $tableau['51'] = 'Marne';
        //echo $tableau
       
        foreach ($tableau as $departmentNumber => $departmentName){
           echo 'Département n°' . $departmentNumber . ' : ' . $departmentName; 
        }  
        ?>

    </body>
</html>
