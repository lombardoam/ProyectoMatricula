<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO requisitos_curso(codigo_requisito, id_curso, codigo_curso_requisito) VALUES('" . $_POST["codigo_requisito"] . "'," . $_POST["id_curso"] . ", '" . $_POST["codigo_curso_requisito"] . "');");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM requisitos_curso WHERE id_requisito = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
