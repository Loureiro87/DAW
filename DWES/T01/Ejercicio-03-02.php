<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03 </title>
</head>
<body>
    <!--Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir se deberá introducir por teclado. --> 
    <?php
        echo "<br><h2> ", $_POST['pesetas'], " Pts son: ", round($_POST['pesetas'] / 166.386, 2 ), "€";
    ?>
</body>
</html>