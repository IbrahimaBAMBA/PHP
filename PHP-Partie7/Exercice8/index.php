<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo7</title>
    </head>
    <body>
        <?php
        //Si aucun de ces trois champs est vide, continuer le code. 
        if (!empty($_POST['prenom']) AND ! empty($_POST['nom']) AND ! empty($_POST['gender'])) {
            //je définis mes regEx pour le nom et le prénom
            $lastNameReg = preg_match(" /^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$/ ", $_POST['nom']);
            $firstNameReg = preg_match(" /^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$/ ", $_POST['prenom']);
            //Si les entrées du formulaire correspondent aux regEx...
            if ($lastNameReg && $firstNameReg) {
                //j'affiche, et j'utilise htmlspecialchars pours convertir d'eventuelles balises html dans les champs 
                echo htmlspecialchars($_POST['gender']) . ' ' . htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_POST['nom']) . ' ';
                //Sinon, un message d'erreur est afficher
            } else {
                echo 'Votre nom ne doit comporter ni chiffres ni caractères spéciaux.';
            }
            //Si mon fichier est bien chargé ET qu'il n'y a pas d'erreur de chargement ..
            if (isset($_FILES['upload-file']) AND $_FILES['upload-file']['error'] == 0) {
                //chemin à analyser(Variable de téléchargement de fichier['nom de l'input']['nom du fichier']);
                $infosfichier = pathinfo($_FILES['upload-file']['name']);
                //stockage de l'extension dans une variable
                $extension_upload = $infosfichier['extension'];
                //Pour définir les extensions autoriser
                $extensions_autorisees = 'pdf';
                //Si l'extension de mon fichier est égal à la liste d'extension autorisé 
                if ($extension_upload == $extensions_autorisees) {
                    //on récupère les données des champs            
                    echo $_FILES['upload-file']['name'];
                    //Sinon, un message d'erreur est afficher
                } else {
                    echo 'Ce n\'est pas un fichier valide';
                }
            }
            //Sinon, un message d'erreur est afficher    
        } else {
            echo 'Veuillez renseigner tout les champs du formulaire';
            //Je ferme mon PHP afin d'avoir mon formulaire dans le else, pour qu'il disparaisse lors de la validation    
        ?>
            <form method="post"  action="index.php" enctype="multipart/form-data">                        
                <select name="gender" id="gender">
                    <option value="Mr">Mr</option>
                    <option value="Mme">Mme</option>
                </select>                    
                <p>
                    <label for="prenom">Votre prénom</label> : 
                    <input type="text" name="prenom" value="Ibrahima"/>
                </p>
                <p>
                    <label for="nom">Votre nom</label> : 
                    <input type="text" name="nom" value="Toumignon"/></p>
                <p>
                    <label for="file">Votre fichier</label> : 
                    <input type="file" name="upload-file" />
                </p>
                <input type="submit" name="submit" value="Envoyer" />
            </form>
            <!--Je reprends mon PHP pour fermer le else-->
        <?php
        }
        ?> 
    </body>
</html>