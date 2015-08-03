<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO tipo_equivalencias(codigo_tipo_eq, descripcion) VALUES('" . $_POST["codigo_tipo_eq"] . "', '" . $_POST["descripcion"] . "' );");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM tipo_equivalencias WHERE id_tipo = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
