<html>
    <head>
        <title>Exercice8</title>
    </head>
    <body>
        <?php
        
        function myFunction( $number1 = 5,  $number2 = 10,  $number3 = 15 ){     //mettre des valeurs par defaut evite d'avoir des erreurs en php
           return $number1 + $number2 + $number3 ;
            }
            echo myFunction();
        
        ?>

    </body>
</html>
