<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO edificios(codigo_edificio, nombre, pisos, cantidad_aulas, cantidad_laboratorios, cantidad_auditorios) VALUES('" . $_POST["codigo_edificio"] . "', '" . $_POST["nombre"] . "', " . $_POST["pisos"] . ", " . $_POST["cantidad_aulas"] . ", " . $_POST["cantidad_laboratorios"] . ", " . $_POST["cantidad_auditorios"] . ");");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM edificios WHERE id_edificio = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
