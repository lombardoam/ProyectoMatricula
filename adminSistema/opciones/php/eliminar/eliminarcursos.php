<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Delete from database
$result = mysqli_query($conexion, "DELETE FROM programacion_cursos WHERE id_programacion = " . $_POST["id_programacion"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
