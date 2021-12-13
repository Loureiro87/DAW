<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 07 </title>
</head>
<body>
    <!-- Muestra la tabla de multiplicar de un número introducido por teclado.
    El resultado se debe mostrar en una tabla (<table> en HTML).  -->
      <?php if (!isset($_POST['n'])): ?>
        Por favor, introduzca un número del 0 al 10:
        <form action="08.php" method="post">
          <input type="number" name="n" min="0" max="10"><br>
          <input type="submit" value="Aceptar">
        </form>
    <?php else: ?>
      <table style="border: 10px;">
        <?php
          $n = $_POST['n'];
          echo "<h1> Tabla del $n </h1>";
          for($i = 0 ; $i < 11; $i++ ) {
              echo "<tr><td>$n x $i = ". ($n*$i) ." </td></tr>";
          }
          
        ?>
      </table>
      <br><a href="08.php">>> Volver</a>
    <?php endif; ?>
</body>
</html>

