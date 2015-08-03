<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE empleados SET codigo_empleado = '" . $_POST["codigo_empleado"] . "', nombres = '" . $_POST["nombres"] . "',  apellidos = '" . $_POST["apellidos"] . "',  genero = '" . $_POST["genero"] . "', telefono = " . $_POST["telefono"] . ", email = '" . $_POST["email"] . "', codigo_carrera = '" . $_POST["codigo_carrera"] . "', id_puesto = " . $_POST["id_puesto"] . ", num_cuenta = " . $_POST["num_cuenta"] . " WHERE id_empleado = " . $_POST["id_empleado"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
