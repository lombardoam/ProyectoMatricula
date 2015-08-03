<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE control_cursos SET id_programacion = " . $_POST["id_programacion"] . ", prematriculados = '" . $_POST["prematriculados"] . "',  matriculados = '" . $_POST["matriculados"] . "',  aprobados = '" . $_POST["aprobados"] . "', reprobados = '" . $_POST["reprobados"] . "', retirados = '" . $_POST["retirados"] . "' WHERE id_control = " . $_POST["id_control"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
