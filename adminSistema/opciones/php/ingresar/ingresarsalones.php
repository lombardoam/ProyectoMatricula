<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO aulas(codigo_aula, id_edificio, num_aula, capacidad, data_show, pizarra_electronica, camara_video, audio) VALUES('" . $_POST["codigo_aula"] . "'," . $_POST["id_edificio"] . ", '" . $_POST["num_aula"] . "', " . $_POST["capacidad"] . ", " . $_POST["data_show"] . ", " . $_POST["pizarra_electronica"] . ", " . $_POST["camara_video"] . ", " . $_POST["audio"] . " );");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM aulas WHERE id_aula = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
