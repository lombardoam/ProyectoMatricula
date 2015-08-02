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

//Update record in database
$result = mysqli_query($conexion, "UPDATE facultades SET codigo_facultad = " . $_POST["codigo_facultad"] . ", nombre_facultad = " . $_POST["nombre_facultad"] . ", codigo_empleado = ". $_POST["codigo_empleado"] ." WHERE id_facultad = " . $_POST["id_facultad"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
