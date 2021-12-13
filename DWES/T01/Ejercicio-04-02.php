<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <!-- Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado. -->
    <?php
      $numero_X = $_POST['x'];
      $numero_Y = $_POST['y'];

      
      echo 'La suma de x + y es: '.($numero_X+$numero_Y).'<br>';
      echo 'La resta de x + y es: '. ($numero_X - $numero_Y).'<br>';
      echo 'La multiplicación de x * y es: '. $numero_X * $numero_Y.'<br>';
      echo 'La división de x / y es: '. round($numero_X / $numero_Y, 2).'<br>';
  

    ?>
  </body>
</html>