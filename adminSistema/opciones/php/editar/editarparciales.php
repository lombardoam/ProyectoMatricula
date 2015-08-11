<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE parciales SET nombre = '" . $_POST["nombre"] . "' WHERE id_parcial = " . $_POST["id_parcial"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
