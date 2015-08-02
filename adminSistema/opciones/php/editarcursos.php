<?php
header('Content-type: application/json');
  require '../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE cursos SET id_asignatura = " . $_POST["id_asignatura"] . ", periodo = '" . $_POST["periodo"] . "', hora_inicial = '" . $_POST["hora_inicial"] . "', hora_final = '" . $_POST["hora_final"] . "', dias = '" . $_POST["dias"] . "', id_docente = " . $_POST["id_docente"] . ",  id_salon = " . $_POST["id_salon"] . ",  id_edificio = '" . $_POST["id_edificio"] . "', seccion = '" . $_POST["seccion"] . "' WHERE id_curso = " . $_POST["id_curso"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
