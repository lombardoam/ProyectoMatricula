<?php
header('Content-type: application/json');
   require 'conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO programacion_cursos(
codigo_prog_curso,
id_periodo,
id_curso,
id_plan_estudio,
seccion,
hora_inicio,
hora_termina,
dias,
id_empleado,
id_aula,
estatus_curso) VALUES(
'" .  $_POST["codigo_prog_curso"] . "',
'" . $_POST["id_periodo"] . "',
'" . $_POST["id_curso"] . "',
'" . $_POST["id_plan_estudio"] . "',
'" .  $_POST["seccion"] . "',
'" .  $_POST["hora_inicio"]   . "',
'" .   $_POST["hora_termina"]   . "',
'" .   $_POST["dias"]  . "',
'" .   $_POST["id_empleado"]  . "',
'" .   $_POST["id_aula"]  . "',
'" .  $_POST["estatus_curso"] . "'
)");


//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM programacion_cursos WHERE id_programacion = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
