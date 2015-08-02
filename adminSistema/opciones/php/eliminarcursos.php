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

//Delete from database
$result = mysqli_query($conexion, "DELETE FROM cursos WHERE id_curso = " . $_POST["id_curso"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
