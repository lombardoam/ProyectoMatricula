<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE puestos SET codigo_puesto = '" . $_POST["codigo_puesto"] . "', descripcion = '" . $_POST["descripcion"] . "' WHERE id_puesto = " . $_POST["id_puesto"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
