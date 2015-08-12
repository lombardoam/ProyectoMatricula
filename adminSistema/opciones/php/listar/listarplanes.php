<?php
header('Content-type: application/json');
require '../../require/conexion.php';

if(empty($_POST['nombre'])){
    //Get records from database
  $result = mysqli_query($conexion, "SELECT * FROM planes_estudio");
}else{
    $nombre = $_POST['nombre'];

    $result = mysqli_query($conexion, "SELECT * FROM planes_estudio WHERE id_carrera = '$nombre' ");
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
