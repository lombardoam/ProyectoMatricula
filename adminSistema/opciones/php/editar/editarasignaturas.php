<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE cursos SET  codigo_curso = '" . $_POST["codigo_curso"] . "', nombre_curso = '" . $_POST["nombre_curso"] . "', uv = " . $_POST["uv"] . ",  horas_practicas = " . $_POST["horas_practicas"] . ", horas_teoricas = " . $_POST["horas_teoricas"] . ", laboratorio = " . $_POST["laboratorio"] . ", id_plan_estudio = " . $_POST["id_plan_estudio"] . ", periodo = " . $_POST["periodo"] . " WHERE id_curso = " . $_POST["id_curso"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
