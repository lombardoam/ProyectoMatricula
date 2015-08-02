<?php
header('Content-type: application/json');
  require '../require/conexion.php';

//Delete from database
$result = mysqli_query($conexion, "DELETE FROM edificios WHERE id_edificio = " . $_POST["id_edificio"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
