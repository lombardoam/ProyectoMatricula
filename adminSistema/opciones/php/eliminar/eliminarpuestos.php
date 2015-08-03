<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Delete from database
$result = mysqli_query($conexion, "DELETE FROM puestos WHERE id_puesto = " . $_POST["id_puesto"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
