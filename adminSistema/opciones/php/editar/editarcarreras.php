<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE carreras SET codigo_carrera = " . $_POST["codigo_carrera"] . ", nombre_carrera = '" . $_POST["nombre_carrera"] . "', id_facultad = " . $_POST["id_facultad"] . ", codigo_empleado = '" . $_POST["codigo_empleado"] . "' WHERE id_carrera = " . $_POST["id_carrera"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
