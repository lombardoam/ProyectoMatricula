<?php
$conexion = mysqli_connect('localhost','root','');
mysql_select_db('matriculas');


if (!$conexion) {
	die('No se pudo conectar a la BD: ' . mysql_error());
}
echo 'Conexion establecida'; mysqli_close($conexion);

?>
