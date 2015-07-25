<?php
header('Content-type: application/json');
   require '../conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO equivalencias(
id_tipo,
id_asignatura,
equivalencia1,
equivalencia2,
equivalencia3
) VALUES(
" .  $_POST["id_tipo"] . ",
'" . $_POST["id_asignatura"] . "',
'" . $_POST["equivalencia1"] . "',
'" .  $_POST["equivalencia2"] . "',
'" .  $_POST["equivalencia3"]   . "'
)");


//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM equivalencias WHERE id_equivalencia = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
