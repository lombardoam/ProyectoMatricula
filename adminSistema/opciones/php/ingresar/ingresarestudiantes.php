<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO estudiantes(num_cuenta, nombres, apellidos, tipo_estudiante, lugar_nacimiento, fecha_nacimiento, estado_civil, direccion_vivienda, telefono, direccion_trabajo, telefono_trabajo, id_carrera, saldo) VALUES(" . $_POST["num_cuenta"] . ", '" . $_POST["nombres"] . "', '" . $_POST["apellidos"] . "', '" . $_POST["tipo_estudiante"] . "', '" . $_POST["lugar_nacimiento"] . "', '" . $_POST["fecha_nacimiento"] . "', '" . $_POST["estado_civil"] . "', '" . $_POST["direccion_vivienda"] . "', " . $_POST["telefono"] . ", '" . $_POST["direccion_trabajo"] . "', " . $_POST["telefono_trabajo"] . ", " . $_POST["id_carrera"] . ", " . $_POST["saldo"] . " );");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE id_estudiante = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
