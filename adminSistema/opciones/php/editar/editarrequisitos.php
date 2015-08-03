<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE requisitos_curso SET codigo_requisito = '" . $_POST["codigo_requisito"] . "', id_curso = " . $_POST["id_curso"] . ",  codigo_curso_requisito = '" . $_POST["codigo_curso_requisito"] . "' WHERE id_requisito = " . $_POST["id_requisito"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
