<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE estudiantes SET num_cuenta = " . $_POST["num_cuenta"] . ", nombres = '" . $_POST["nombres"] . "',  apellidos = '" . $_POST["apellidos"] . "',  tipo_estudiante = '" . $_POST["tipo_estudiante"] . "', lugar_nacimiento = '" . $_POST["lugar_nacimiento"] . "', fecha_nacimiento = '" . $_POST["fecha_nacimiento"] . "', estado_civil = '" . $_POST["estado_civil"] . "', direccion_vivienda = '" . $_POST["direccion_vivienda"] . "', telefono = " . $_POST["telefono"] . ", direccion_trabajo = '" . $_POST["direccion_trabajo"] . "', telefono_trabajo = " . $_POST["telefono_trabajo"] . ", id_carrera = " . $_POST["id_carrera"] . ", saldo = " . $_POST["saldo"] . " WHERE id_estudiante = " . $_POST["id_estudiante"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
