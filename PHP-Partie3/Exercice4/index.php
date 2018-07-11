<html>
    <head>

    </head>
    <body>
        <?php
      $var = 1;
      while ($var < 10){
          echo $var;
          $var = $var+ $var/2; // $var += $var/2 (on incremente de la moitié)
      }
        ?>
        <!-- for($first = 1; $first <= 10 ; $first += $first/2) {
        echo $first.' ';   -->
    </body>
</html>
