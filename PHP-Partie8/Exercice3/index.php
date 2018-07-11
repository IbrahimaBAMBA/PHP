
<?php
// On vérifie que les données soit bien rentrées.
if (isset($_POST['pseudo']) && isset($_POST['password'])) {
    // On créer des cookies d'une certaines durées (1 an dans ce cas) et on lui attribut les chemins disponible " '/' ".
    setcookie('pseudo', $_POST['pseudo'], time() + 365 * 24 * 3600, '/', null, false, true);
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 3 partie 8 php</title>
  </head>
  <body>
    <form class="form" action="index.php" method="POST">
      <label for="pseudo">Pseudo : </label>
      <input type="text" name="pseudo" placeholder="pseudo" />
      <label for="password">Mot de passe : </label>
      <input type="password" name="password" placeholder="mot de passe" />
      <button type="submit" name="validate">Valider</button>
    </form>
    <p>
        <?php
        // On affiche la valeur des cookies et on utilise htmlspecialchars afin de protéger les champs rentrées et convertir tout code superflux.
        echo 'Bonjour ' . htmlspecialchars($_COOKIE['pseudo']) . htmlspecialchars($_COOKIE['password']);
        ?>
    </p>
    <a href="../index.php">Retour</a>
  </body>
</html>
//<?php
//if (isset($_GET['login'])AND isset($_GET['password'])){                          // on verifie si le champ existe
//setcookie('login', $_GET['login'], time() + 365*24*3600, null, null,false, true);    //$_GET pour recuperer et garder la valeur du champ 'login' dans un cookie
//setcookie('password',$_GET['password'], time() + 365*24*3600, null, null,false, true);//idem
//
//   
//}
//
//?>
<!--<html lang="fr">
    <meta charset="utf-8">
    <head>
        <title>Exercice3</title>
    </head>
    <body>
        <a href="../Exercice5/"/>lien</a>
    
    
        <form action="index.php" method="GET"> on crée le formulaire
            <input type="text" name="login"/>
            <input type="password" name="password"/>
            <input type="submit" value="submit"/>
        </form>-->
        //<?php
//        echo $_COOKIE['login'], $_COOKIE['password']; //On recupère les données qui sont dans le cookie pour l'afficher
//        ?>

<!--    </body> en somme je recupère les champs du formulaire dans un cookie puis j'affiche les données passées dans le cookie. 
</html>-->
