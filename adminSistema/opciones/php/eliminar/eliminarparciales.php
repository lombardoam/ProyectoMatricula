<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Delete from database
$result = mysqli_query($conexion, "DELETE FROM parciales WHERE id_parcial = " . $_POST["id_parcial"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
