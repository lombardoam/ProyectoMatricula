<?php


//Update record in database
$result = mysqli_query($conexion, "UPDATE carreras SET id_facultad = " . $_POST["id_facultad"] . ", nombre_carrera = '" . $_POST["nombre_carrera"] . "', nombre_coordinador = '" . $_POST["nombre_coordinador"] . "' WHERE id_facultad = " . $_POST["id_facultad"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
