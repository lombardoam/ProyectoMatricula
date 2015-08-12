<?php
header('Content-type: application/json');
require '../../require/conexion.php';

if(empty($_POST['cuenta'])){
   //Get records from database
  $result = mysqli_query($conexion, "SELECT * FROM estudiantes");
}else{
    $cuenta = $_POST['cuenta'];

    $result = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE num_cuenta = '$cuenta'");
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
