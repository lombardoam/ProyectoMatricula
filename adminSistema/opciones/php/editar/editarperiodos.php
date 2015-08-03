<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE periodos_academicos SET codigo_periodo = '" . $_POST["codigo_periodo"] . "', fecha_inicio = '" . $_POST["fecha_inicio"] . "', fecha_terminacion = '" . $_POST["fecha_terminacion"] . "' WHERE id_periodo = " . $_POST["id_periodo"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
