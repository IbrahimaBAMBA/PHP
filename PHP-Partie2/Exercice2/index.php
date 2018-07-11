<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice2</title>
  </head>
  <body>
    <?php
    $isEasy = true;
//première méthode avec le if et le double =
  /*  if($isEasy == true){
      echo 'c\'est facile';
    }else {
      echo 'c\'est difficile';
    } */
    /*if($isEasy){
      echo 'c\'est facile';
    }else {
      echo 'c\'est difficile';
    }*/
    /*switch ($isEasy) {
      case true:
        echo 'c\'est facile';
        break;
      default:
        echo 'c\'est difficile';
        break;
    }*/
    echo $isEasy ? 'c\'est facile' : 'c\'est difficile';
     ?>
  </body>
</html>
