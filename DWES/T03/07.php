<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 07 </title>
</head>
<body>
    <!-- Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. 
    El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje 
    “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto satisfactoriamente”.
    Tendremos cuatro oportunidades para abrir la caja fuerte. .
    -->
    <?php

        if (!isset($_POST['oportunidades'])) {
            $numeroIntroducido = 55555;
            $oportunidades = 3;
          } else {
            $oportunidades = $_POST['oportunidades'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
          }
      
          $numeroSecreto = 1234;
      
          if ($numeroIntroducido == $numeroSecreto) {
            echo "La caja fuerte se ha abierto.";
            echo '<img src="https://www.gifss.com/economia/caja_fuerte/images/cajafuerte04.gif"  alt="">';
          } elseif ($oportunidades == 0) {
            echo "Lo siento, has agotado todas tus oportunidades. La caja fuerte permanecerá cerrada.";
          } else {
            echo "Te quedan ", $oportunidades, " oportunidades para abrir la caja fuerte.<br>";
            $oportunidades--;
            echo "Introduce un número de cuatro cifras.";
            echo '<form action="07.php" method="post">';
            echo '<input type="number" min=0 max=9999 name="numeroIntroducido" autofocus>';
            echo '<input type="hidden" name="oportunidades" value="', $oportunidades, '">';
            echo '<input type="submit" value="Continuar">';
            echo '</form>';
          }     
    ?>
</body>
</html>