<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO periodos_academicos(codigo_periodo, fecha_inicio, fecha_terminacion) VALUES('" . $_POST["codigo_periodo"] . "', '" . $_POST["fecha_inicio"] . "', '" . $_POST["fecha_terminacion"] . "');");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM periodos_academicos WHERE id_periodo = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
