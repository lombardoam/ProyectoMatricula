<?php
header('Content-type: application/json');
require '../../require/conexion.php';

if(empty($_POST['nombre']) && empty($_POST['docente'])){
    //Get records from database
  $result = mysqli_query($conexion, "SELECT * FROM programacion_cursos");
}else{
    $nombre = $_POST['nombre'];
    $docente = $_POST['docente'];

    $result = mysqli_query($conexion, "SELECT * FROM programacion_cursos WHERE id_curso LIKE '%$nombre%' AND id_empleado LIKE '%$docente%' ");
}

  //Add all records to an array
  $rows = array();
  while($row = mysqli_fetch_assoc($result))
  {
  $rows[] = $row;
  }

  //Return result to jTable
  $jTableResult = array();
  $jTableResult['Result'] = "OK";
  $jTableResult['Records'] = $rows;
  print json_encode($jTableResult);
?>
