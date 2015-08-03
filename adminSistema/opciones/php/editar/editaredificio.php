<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE edificios SET nombreedificio = '" . $_POST["nombreedificio"] . "', numero_pisos = " . $_POST["numero_pisos"] . ",  cantidad_aulas = " . $_POST["cantidad_aulas"] . ",  cantidad_auditorios = " . $_POST["cantidad_auditorios"] . ", cantidad_laboratorios = " . $_POST["cantidad_laboratorios"] . " WHERE id_edificio = " . $_POST["id_edificio"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
