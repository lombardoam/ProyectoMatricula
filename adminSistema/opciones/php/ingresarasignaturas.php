<?php
header('Content-type: application/json');
  require '../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO asignaturas(nombre_asignatra, cod_asignatura, unidades_valorativas, horas_teoricas, horas_practicas, periodo) VALUES('" . $_POST["nombre_asignatra"] . "', '" . $_POST["cod_asignatura"] . "', " . $_POST["unidades_valorativas"] . "," . $_POST["horas_teoricas"] . ", " . $_POST["horas_practicas"] . ", '" . $_POST["periodo"] . "');");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM asignaturas WHERE id_asignatura = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
