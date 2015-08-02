<?php
header('Content-type: application/json');
   require 'conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO tipos_equivalencia(
descripcion
) VALUES(
'" .  $_POST["descripcion"] . "'
)");


//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM tipos_equivalencia WHERE id_tipo = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
