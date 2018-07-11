<html>
    <head>
        <title>Exercice6</title>
    </head>
    <body>
        <?php
       
        function myFunction($firstname, $lastname, $age){
            return  'Bonjour ' . $firstname .' '. $lastname . ',tu as'.' '. $age . ' ans';
        }
        echo  myFunction('Ibrahima', 'Bamba', 42);
        ?>

    </body>
</html>
