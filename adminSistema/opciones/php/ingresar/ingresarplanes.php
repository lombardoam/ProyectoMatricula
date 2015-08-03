<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO planes_estudio(codigo_plan, nombre_plan, duracion, cantidad_cursos, total_uv, id_carrera) VALUES('" . $_POST["codigo_plan"] . "', '" . $_POST["nombre_plan"] . "', '" . $_POST["duracion"] . "', " . $_POST["cantidad_cursos"] . ", " . $_POST["total_uv"] . ", " . $_POST["id_carrera"] . ");");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM planes_estudio WHERE id_plan_estudio = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
