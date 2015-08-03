<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE edificios SET codigo_edificio = '" . $_POST["codigo_edificio"] . "', nombre = '" . $_POST["nombre"] . "', pisos = " . $_POST["pisos"] . ",  cantidad_aulas = " . $_POST["cantidad_aulas"] . ", cantidad_laboratorios = " . $_POST["cantidad_laboratorios"] . ", cantidad_auditorios = " . $_POST["cantidad_auditorios"] . " WHERE id_edificio = " . $_POST["id_edificio"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
