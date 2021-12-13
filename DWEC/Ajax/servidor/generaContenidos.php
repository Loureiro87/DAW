<?php
$c = new MySQLi("localhost","root","1234","noticias");
// Comprobamos la conexión
if ($c->connect_error) {
    die("Connection failed: " . $c->connect_error);
}
// Generar salida del servidor en formato utf-8
$c->query("SET NAMES utf8");
// Consulta de la tabla
$sql = "SELECT texto FROM noticias ORDER BY fecha DESC LIMIT 1";

if ($resultado = $c->query($sql)){
	// No hay error
	if ($resultado->num_rows > 0){
		// Tenemos datos
		$fila = $resultado->fetch_assoc();
		echo $fila['texto'];
	}
	else{
		echo ""; // No hay datos
	}
}
else {
	echo "Se ha producido un error en la consulta ";
}
$c->close();
?>