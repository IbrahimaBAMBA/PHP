<html>
    <head>
        <title>Exercice3</title>
    </head>
    <body>
        <?php
        $texte = 'hello';
        $texte1 = 'world !';

        function monTexte($texte,$texte1) {
            $phrase = $texte . $texte1;
            return $phrase;
        }

        echo monTexte('hello', 'world !');  // on appelle pas deux fois la même fonction
        
        ?>

    </body>
</html>
