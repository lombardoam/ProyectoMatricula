<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Delete from database
$result = mysqli_query($conexion, "DELETE FROM carreras WHERE id_carrera = " . $_POST["id_carrera"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
