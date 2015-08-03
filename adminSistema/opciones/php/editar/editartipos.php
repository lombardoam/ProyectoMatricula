<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE tipos_usuarios SET nombre = '" . $_POST["nombre"] . "', descripcion = '" . $_POST["descripcion"] . "' WHERE tipo_usuario = " . $_POST["tipo_usuario"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
