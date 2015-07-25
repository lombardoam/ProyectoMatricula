<?php
header('Content-type: application/json');
  require '../conexion.php';

//Delete from database
$result = mysqli_query($conexion, "DELETE FROM prematricula WHERE id_prematricula = " . $_POST["id_prematricula"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
