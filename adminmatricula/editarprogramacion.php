<?php
header('Content-type: application/json');
  require 'conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE programacion_cursos SET codigo_prog_curso =
'" . $_POST["codigo_prog_curso"] . "',
id_periodo = '" . $_POST["id_periodo"] . "',
id_curso = '" . $_POST["id_curso"]  . "',
seccion = '" . $_POST["seccion"]  . "',
hora_inicio = '" . $_POST["hora_inicio"]  . "',
hora_termina = '" . $_POST["hora_termina"]  . "',
dias ='" . $_POST["dias"] . "',
id_empleado ='" . $_POST["id_empleado"] . "',
id_aula ='" . $_POST["id_aula"] . "',
estatus_curso ='" . $_POST["estatus_curso"]  . "'
WHERE id_programacion = " . $_POST["id_programacion"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
