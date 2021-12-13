<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02 -- T04</title>
</head>
<body>
    <table>
        <tbody>
            
            <tr>
                <th>variable</th>
                <th>Valor</th>
            </tr>
        <?php
            foreach($_SERVER as $variable => $valor){
                print "<tr>";
                print "<td>".$variable."</td>";
                print "<td>".$valor."</td>";
                print "</tr>";
            
            }
        
        ?>

        </tbody>
    </table>
</body>
</html>