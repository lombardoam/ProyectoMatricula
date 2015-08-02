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
$result = mysqli_query($conexion, "UPDATE asignaturas SET  nombre_asignatra = '" . $_POST["nombre_asignatra"] . "', cod_asignatura = '" . $_POST["cod_asignatura"] . "', unidades_valorativas = " . $_POST["unidades_valorativas"] . ",  horas_teoricas = " . $_POST["horas_teoricas"] . ", horas_practicas = " . $_POST["horas_practicas"] . ", periodo = '" . $_POST["periodo"] . "' WHERE id_asignatura = " . $_POST["id_asignatura"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
