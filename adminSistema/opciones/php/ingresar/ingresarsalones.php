<?php
header('Content-type: application/json');
  require '../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO salones(id_tipo_salon, id_edificio, numero_salon, capacidad, recursos) VALUES(" . $_POST["id_tipo_salon"] . "," . $_POST["id_edificio"] . "," . $_POST["numero_salon"] . "," . $_POST["capacidad"] . ",'" . $_POST["recursos"] . "');");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM salones WHERE id_salon = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
