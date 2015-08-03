<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE contenido_cursos SET codigo_contenido = '" . $_POST["codigo_contenido"] . "', id_curso = " . $_POST["id_curso"] . ",  tema = '" . $_POST["tema"] . "',  descripcion = '" . $_POST["descripcion"] . "' WHERE id_contenido = " . $_POST["id_contenido"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
