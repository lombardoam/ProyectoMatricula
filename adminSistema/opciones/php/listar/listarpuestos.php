<?php
header('Content-type: application/json');
require '../../require/conexion.php';

if(empty($_POST['puesto'])){
    //Get records from database
  $result = mysqli_query($conexion, "SELECT * FROM puestos");
}else{
    $puesto = $_POST['puesto'];

    $result = mysqli_query($conexion, "SELECT * FROM puestos WHERE descripcion LIKE '%$puesto%' ");
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
