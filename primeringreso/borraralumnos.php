<?php
header('Content-type: application/json');
  require '../conexion.php';

//Delete from database
$result = mysqli_query($conexion, "DELETE FROM estudiantes WHERE id_estudiante = " . $_POST["id_estudiante"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
