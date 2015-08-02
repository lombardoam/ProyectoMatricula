<?php
   session_start();
   if(!(
      isset($_SESSION['nombre']) &&
      isset($_SESSION['apellido']) &&
      isset($_SESSION['usuario']) &&
      isset($_SESSION['tipo_usuario']) &&
      isset($_SESSION['num_cuenta'])
      )
   ){
      header('Location:../index.php?no_aut');
   }
header('Content-type: application/json');
  require '../require/conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO edificios(nombreedificio, numero_pisos, cantidad_aulas, cantidad_auditorios, cantidad_laboratorios) VALUES('" . $_POST["nombreedificio"] . "'," . $_POST["numero_pisos"] . "," . $_POST["cantidad_aulas"] . "," . $_POST["cantidad_auditorios"] . "," . $_POST["cantidad_laboratorios"] . ");");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM edificios WHERE id_edificio = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
