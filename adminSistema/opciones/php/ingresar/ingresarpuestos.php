<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO puestos(codigo_puesto, descripcion) VALUES('" . $_POST["codigo_puesto"] . "', '" . $_POST["descripcion"] . "' );");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM puestos WHERE id_puesto = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
