<?php
header('Content-type: application/json');
  require '../require/conexion.php';

//Delete from database
$result = mysqli_query($conexion, "DELETE FROM cursos WHERE id_curso = " . $_POST["id_curso"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
