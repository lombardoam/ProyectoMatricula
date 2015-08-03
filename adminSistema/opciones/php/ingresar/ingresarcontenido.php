<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO contenido_cursos(codigo_contenido, id_curso, tema, descripcion) VALUES('" . $_POST["codigo_contenido"] . "'," . $_POST["id_curso"] . ", '" . $_POST["tema"] . "', '" . $_POST["descripcion"] . "');");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM contenido_cursos WHERE id_contenido = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
