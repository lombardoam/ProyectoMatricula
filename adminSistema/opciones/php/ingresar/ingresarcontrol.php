<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO control_cursos(id_programacion, prematriculados, matriculados, aprobados, reprobados, retirados) VALUES(" . $_POST["id_programacion"] . ", '" . $_POST["prematriculados"] . "', '" . $_POST["matriculados"] . "', '" . $_POST["aprobados"] . "', '" . $_POST["reprobados"] . "', '" . $_POST["retirados"] . "' );");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM control_cursos WHERE id_control = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
