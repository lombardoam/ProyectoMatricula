<?php
header('Content-type: application/json');
   require 'conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO equivalencias(
codigo_eq,
nombre_universidad,
id_curso,
codigo_clase_equivalencia,
num_cuenta,
id_tipo,
comentarios
) VALUES(
'" . $_POST["codigo_eq"] . "',
'" . $_POST["nombre_universidad"] . "',
'" .  $_POST["id_curso"] . "',
'" .  $_POST["codigo_clase_equivalencia"] . "',
'" .  $_POST["num_cuenta"] . "',
'" .  $_POST["id_tipo"] . "',
'" .  $_POST["comentarios"]   . "'
)");


//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM equivalencias WHERE id_interna = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
