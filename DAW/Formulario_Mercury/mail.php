<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Envio</title>
    <style>
        *{
            margin:3px;
            padding:3px;
        }
        body{
            background:url(oscuro.jpg) #2b2b2a;
            background-position: center ;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
    <h1>Formulario de contacto.</h1>
    <form action="#" method="post">
        <p>
            <label for="nombre">Nombre <span style="color: red">(*)</span></label><br>
            <input type="text" name="name" max-length="50" placeholder="nombre">
        </p>
        <p>
            <label for="nombre">Apellido <span style="color: red">(*)</label><br>
            <input type="text" name="name" max-lenght="50" placeholder="apellidos">
        </p>
        <p>
            <label for="tel">Teléfono </label><br>
            <input type="text" name="name">
        </p>
        <p>
            <label for="asusnto">Asunto <span style="color: red">(*)</label><br>
            <input type="text" name="name" placeholder="nombre">
        </p>
        <p>
            <label for="mail">Email<span style="color: red">(*)</label><br>
            <input type="text" name="name" placeholder="ej:example@gmail.com">
        </p>
        <p>
            <input type="checkbox" name="terminos" require/> He leído y acepto los Términos y Condiciones
        </p>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>