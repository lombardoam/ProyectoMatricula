<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO facultades(codigo_facultad, nombre_facultad, codigo_empleado) VALUES('" . $_POST["codigo_facultad"] . "','" . $_POST["nombre_facultad"] . "', '" . $_POST["codigo_empleado"] . "');");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM facultades WHERE id_facultad = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
