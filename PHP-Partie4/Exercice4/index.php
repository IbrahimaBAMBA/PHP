<html>
    <head>
        <title>Exercice4</title>
    </head>
    <body>
        <?php
       

        function myNumber($number1, $number2) {
            if ($number1 > $number2) {
                return 'Le premier nombre plus grand';
            } elseif ($number1 < $number2) {
                return 'Le premier nombre est plus petit';
            } elseif ($number1 == $number2) {
                return 'Les deux nombres sont identiques';
            }
        }
        echo myNumber(9, 10);
        ?>

    </body>
    $first_number = 12;
  $second_number = 42;
  function numberComparate($number1, $number2) {
    if($number1 > $number2) {
      $message = 'Le premier nombre est plus grand !';
    } elseif ($number1 < $number2) {
      $message = 'Le premier nombre est plus petit !';
    } else {
      $message = 'Les deux nombres sont identiques !';
    } 
    return $message;
  }
  numberComparate($first_number, $second_number);
</html>
