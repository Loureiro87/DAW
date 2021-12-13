<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 4 - 02</title>
</head>
<body>
    <!--Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos junto 
    con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente. -->
   <?php 
  //Pide número y añade el actual a la cadena
  
  if (!isset($_GET['n'])) {
    $contadorNumeros = 0;
    $numeroTexto = "";
    $n = "";
  } else {
    $n = $_GET['n'];
    $contadorNumeros = $_GET['contadorNumeros'];
    $numeroTexto = $_GET['numeroTexto'];
  }

  // Introducir los 10 numeros en el array 
  if($contadorNumeros == 10){
        $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
        echo '<pre>';
        echo $numeroTexto;
        echo '</pre>';
        $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes
        $numero = explode(" ", $numeroTexto);
        $maximo = -PHP_INT_MAX;
        $minimo = PHP_INT_MAX;

        foreach ($numero as $n) {
            if ($n < $minimo) {
              $minimo = $n;
            }
            if ($n > $maximo) {
              $maximo = $n;
            }
          }
  
          foreach ($numero as $n) {
            echo "$n";
            if ($n == $minimo) {
              echo " mínimo";
            }
            if ($n == $maximo) {
              echo " máximo";
            }
            echo "<br>";
          }
          ?>
          <br>
          <a href="02.php">>> Volver</a>
          <?php
  }


  if (($contadorNumeros < 10) || (!isset($n))) {
    ?>
    <form action="02.php" method="get">
      <h2> Introduzca un número: </h2>  
      <input type="number" name ="n" autofocus>
      <input type="hidden" name="contadorNumeros" value="<?= ++$contadorNumeros ?>">
      <input type="hidden" name="numeroTexto" value="<?= $numeroTexto . " " . $n ?>">
      <br>
      <br>
      <input type="submit" value="Enviar">
    </form>
    <?php
  }
  ?>      
    
</body>
</html>