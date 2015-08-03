<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE planes_estudio SET codigo_plan = '" . $_POST["codigo_plan"] . "', nombre_plan = '" . $_POST["nombre_plan"] . "',  duracion = '" . $_POST["duracion"] . "',  cantidad_cursos = " . $_POST["cantidad_cursos"] . ", total_uv = " . $_POST["total_uv"] . ", id_carrera = " . $_POST["id_carrera"] . " WHERE id_plan_estudio = " . $_POST["id_plan_estudio"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
