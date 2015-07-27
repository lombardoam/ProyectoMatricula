<?php
header('Content-type: application/json');
  require '../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE facultades SET nombre_facultad = " . $_POST["nombre_facultad"] . ", nombre_decano = " . $_POST["nombre_decano"] . " WHERE id_facultad = " . $_POST["id_facultad"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
