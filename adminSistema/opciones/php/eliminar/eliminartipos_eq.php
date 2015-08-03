<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Delete from database
$result = mysqli_query($conexion, "DELETE FROM tipo_equivalencias WHERE id_tipo = " . $_POST["id_tipo"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
