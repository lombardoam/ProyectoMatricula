<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE aulas SET codigo_aula = '" . $_POST["codigo_aula"] . "', id_edificio = " . $_POST["id_edificio"] . ",  num_aula = '" . $_POST["num_aula"] . "',  capacidad = " . $_POST["capacidad"] . ", data_show = " . $_POST["data_show"] . ", pizarra_electronica = " . $_POST["pizarra_electronica"] . ", camara_video = " . $_POST["camara_video"] . ", audio = " . $_POST["audio"] . " WHERE id_aula = " . $_POST["id_aula"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
