<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de frutas</title>
</head>
<body>
    <?php
        $frutas = array("127815" => 0, "127816" => 0, "127817" => 0, "127818" => 0, "127819" => 0,
                        "127820" => 0, "127821" => 0, "127822" => 0 , "127823" => 0, "127824" => 0,
                        "127825" => 0, "127826" => 0 , "127827" => 0 );
        $numFrutas_max = rand(7,20);
        $numFrutas = 0;
        $tipos_frutas = array();

     for($i= 0 ; $i< $numFrutas_max ;$i++){
        $numFrutas = rand(127815,127827);
        
        if($numFrutas){
            $frutas[$numFrutas] +=1;
        }
    }
    ?>




<center><h1>DisFruta con PHP</h1></center>

<h2><?php echo $numFrutas_max ?> frutas</h2>

<p style="font-size: 7rem">
<?php

   foreach($frutas as $variable => $valor){
     if($valor > 0){   
        echo "&#".$variable;
     }
   }
    
?>
</p>

<h2>Resultados</h2>
<?php
   foreach($frutas as $variable => $valor){
   if($valor >= 2){
?>

<p>La fruta <span style="font-size: 2rem"><?php echo "&#".$variable ?></span> está <strong><?php echo $valor ?></strong> veces en la lista.</p>


<?php
   }
   elseif($valor == 1 ){
    ?>
     <p>La fruta <span style="font-size: 2rem"><?php echo "&#".$variable ?></span> está <strong><?php echo $valor ?></strong> vez en la lista..</p>
    
    <?php
   }
}
?>
<br>
  <center><button onclick="location.reload()">¡¡¡ DisFruta otra vez !!!</button></center>
<br>
</body>
</html>