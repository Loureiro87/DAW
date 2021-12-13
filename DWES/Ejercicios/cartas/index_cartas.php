<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> MUESTRA CARTAS (FORMULARIO) </h2>
    <form action="cartas.php" method="post">
        Numero de cartas <input type="number" name="num_cartas"  minlength="3"  maxlength="12">
        <select name="palos">
            <option name="corazones " value="Corazones">Corazones</option>
            <option name="diamantes" value="Diamantes">Diamantes</option>
            <option name="picas" value="Picas">Picas</option>
            <option name="treboles" value="Treboles">Treboles</option>

        </select>
        <br>
        <input type="submit" value="Aceptar"  />

    </form>
</body>
</html>