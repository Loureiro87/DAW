<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06 </title>
</head>
<body>
    <!-- Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle do-while .-->
    <?php

        const NUMFINAL = 160;
        $i = 320;
        do{
            
            echo "$i ";
            $i-=20;
        }while($i>=NUMFINAL);
        
    ?>
</body>
</html>