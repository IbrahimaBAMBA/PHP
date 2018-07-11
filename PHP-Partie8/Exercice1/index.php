<!Doctype html>
<html lang="fr">
    <meta charset="utf-8">
    <head>
        <title>title</title>
    </head>
    <body>
       <?php
       $ip = $_SERVER['REMOTE_ADDR'];
       $serverName = $_SERVER['SERVER_NAME'];
       $userAgent = $_SERVER['HTTP_USER_AGENT'];
        
        echo 'Adresse Ip du client: ' . $_SERVER['REMOTE_ADDR'];
        ?>
        </br>
        <?php
                
          echo      'Nom du serveur: ' . $_SERVER['SERVER_NAME'];
          ?>
        </br>
        <?php
                
          echo      'user agent: ' . $_SERVER['HTTP_USER_AGENT'];
        ?>
    </body>
</html>
