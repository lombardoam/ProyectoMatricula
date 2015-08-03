<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO empleados(codigo_empleado, nombres, apellidos, genero, telefono, email, codigo_carrera, id_puesto, num_cuenta) VALUES('" . $_POST["codigo_empleado"] . "', '" . $_POST["nombres"] . "', '" . $_POST["apellidos"] . "', '" . $_POST["genero"] . "', " . $_POST["telefono"] . ", '" . $_POST["email"] . "', '" . $_POST["codigo_carrera"] . "', " . $_POST["id_puesto"] . ", " . $_POST["num_cuenta"] . " );");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM empleados WHERE id_empleado = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
