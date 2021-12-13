<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 4 - 01</title>
</head>
<body>
    <?php 
        /*Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
        Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben almacenar 
        los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben almacenar los cubos de los 
        valores que hay en “numero”. A continuación, muestra el contenido de los tres arrays dispuesto en tres columnas.*/

        $numero = array();
        $cuadro = array();
        $cubo = array();
        $min = 0;
        $max = 100; 

        //$array_num = count($numero);
        $array_num = 20;


       /* echo "Numero ||  Cuadrado || Cubo<br>";
        for ($i = 0; $i < $array_num; ++$i){

           //$numero[$i] = rand($min,$max);
           $numero[$i] = rand(1,100);
           $cuadrado[$i] = pow($numero[$i],2);
           $cubo[$i] = pow($numero[$i],3);
           //$numero[$i] = 1;
           print "El Numero es: ".$numero[$i]." Su cuadrado es: ".$cuadrado[$i]." Su Cubo es: ".$cubo[$i]." <br>";
        }
        */
        echo "<table><tr><th>Numero</th><th>Cuadrado</th><th>Cubo</th></tr>";
        for ($i = 0; $i < $array_num; ++$i){

           //$numero[$i] = rand($min,$max);
           $numero[$i] = rand(1,100);
           $cuadrado[$i] = pow($numero[$i],2);
           $cubo[$i] = pow($numero[$i],3);
           //$numero[$i] = 1;
         //  print "El Numero es: ".$numero[$i]." Su cuadrado es: ".$cuadrado[$i]." Su Cubo es: ".$cubo[$i]." <br>";


           print "<tr><td>".$numero[$i]."</td><td>".$cuadrado[$i]."</td><td>".$cubo[$i]."</td></tr>";
        }


    
    ?>
</body>
</html>