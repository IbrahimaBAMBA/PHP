<html>
    <head>
        <title>user.php</title>
    </head>
    <body>
        <?php
        //On crée un regex Une Majuscule en premier et une seule pas plus puis AU MOIN un lettre minucule
        $regName = '/^[A-Z]{1}[a-z]+$/';
        //Si les champs son pas vide c'est ok (sisi sa pas crême)
        if (!empty($_POST['surname']) &&!empty($_POST['name'])) {
        //Si le regex a déterminer que la saisie et valide c'est ok
        if (preg_match($regName, $_POST['surname']) && preg_match($regName, $_POST['name'])) {
        //On affiche le contenue de la variable $_POST['surname']
        echo strip_tags($_POST['surname']);
        ?>
        <br/
            <?php
            //On affiche le contenue de la variable $_POST['name']
            echo strip_tags($_POST['name']);
            // Sinon si les regex n'accepte pas les saise il vas ecrire la phrase si dessous (Walah t'as vus ça c'est trop fort)
            }else{
            echo 'Merci de ne pas mettre de caractères spéciaux';
            }
            //Sinon si un des deux champs et vide il te met une petite phrase pas piqué des hannetons
            }else{
            echo 'Remplissez tous les champs';
            }
            </body>


            </html>       