<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 4 - 03</title>
</head>
<body>
  <!--Escribe un programa que lea 15 números por teclado y que los almacene en un array. 
      Rota los elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a la 2, etc.
      El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente, muestra el contenido del array. 
 -->
 <?php 
  if(!isset($_POST['n'])){
    $n = "";
    $numeroContador = 0;
  }else{
    $n = $_POST['n'];
    $numeroContador = $_POST['numeroContador'];
  }
  if ($contadorNumeros == 15) {
    $numeroTexto = $numeroTexto . " " . $n; // añade el último número leído
    $numeroTexto = substr($numeroTexto, 2); // quita espacios sobrantes

    $numero = explode(" ", $numeroTexto);

 ?>




  <h2>Introduzca un numero:</h2>
  <form action="03.php" method="POST">
    <input type="number" name="n">
    <input type="hidden" name="numeroContador" value="<?= ++$numeroContador ?>">
    <input type="submit" value="Enviar">
  </form>
</body>
</html>