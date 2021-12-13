<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
</head>
<body>
    <!-- La segunda página mostrará:

El número de cartas del palo indicado por el usuario con sus correspondientes imágenes, generadas al azar.

Si hay cartas iguales consecutivas entre ellas. -->

<?php
    $palos = $_POST['palos'];
    $num_cartas = $_POST['num_cartas'];
    $baraja = array();

   /* $diamante = array("d1" => 0,"d2" => 0,"d3" => 0,"d4" => 0,"d5" => 0,"d6" => 0,"d7" => 0,"d8" => 0,"d9" => 0,"d10" => 0 );
    $corazones = array("c1" => 0,"c2" => 0,"c3" => 0,"c4" => 0,"c5" => 0,"c6" => 0,"c7" => 0,"c8" => 0,"c9" => 0,"c10" => 0 );
    $treboles = array("t1" => 0,"t2" => 0,"t3" => 0,"t4" => 0,"t5" => 0,"t6" => 0,"t7" => 0,"t8" => 0,"t9" => 0,"t10" => 0 );
    $picas = array("p1" => 0,"p2" => 0,"p3" => 0,"p4" => 0,"p5" => 0,"p6" => 0,"p7" => 0,"p8" => 0,"p9" => 0,"p10" => 0 );
    */
    for($i= 0 ; $i< $num_cartas ;$i++){
        $baraja[$i] = rand(1,10);
        
        echo $baraja[$i];
        
    }
?>
<h2><?php echo $num_cartas ?> cartas de <?php echo $palos ?></h2>
​
  <p>
    <?php
        foreach ($baraja as $i) {
    
    ?>
    <img src="img/d<?php echo $baraja[$i]?>.svg" alt="3" width="100">

    <?php
    }
    ?>
  </p>
​
  <p>Hay cartas iguales seguidas.</p>
</body>
</html>