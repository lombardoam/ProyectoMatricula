<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE facultades SET codigo_facultad = " . $_POST["codigo_facultad"] . ", nombre_facultad = " . $_POST["nombre_facultad"] . ", codigo_empleado = ". $_POST["codigo_empleado"] .", id_puesto = ". $_POST["id_puesto"] ." WHERE id_facultad = " . $_POST["id_facultad"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
