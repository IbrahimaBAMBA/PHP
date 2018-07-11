<html>
    <head>
        <title>Exercice7</title>
    </head>
    
        <?php
        
        function myFunction($age, $gender){
            
            if ($age >= 18 && $gender == 'femme')
                    {
            return 'Vous êtes un homme et vous êtes majeur';
            } elseif($gender == 'homme' && $age <= 18 )
                    {
                return 'Vous êtes un homme et vous êtes mineur';
                } elseif ($gender == 'femme' && $age >= 18){
                    return 'Vous êtes une femme et vous êtes majeur';
                
            } elseif ($gender == 'femme' && $age <= 18){
                return 'Vous êtes une femme et vous êtes mineur';
            }
            }
        echo myFunction(18, 'homme');
        
        ?>

    
</html>
