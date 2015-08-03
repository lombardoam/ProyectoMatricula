<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO carreras(codigo_carrera, nombre_carrera, id_facultad, id_empleado) VALUES('" . $_POST["codigo_carrera"] . "', '" . $_POST["nombre_carrera"] . "', " . $_POST["id_facultad"] . ", " . $_POST["id_empleado"] . ");");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM carreras WHERE id_carrera = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
