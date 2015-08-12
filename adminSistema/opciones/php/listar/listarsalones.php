<?php
header('Content-type: application/json');
require '../../require/conexion.php';

if(empty($_POST['numero'])){
    //Get records from database
  $result = mysqli_query($conexion, "SELECT * FROM aulas");
}else{
    $numero = $_POST['numero'];

    $result = mysqli_query($conexion, "SELECT * FROM aulas WHERE num_aula = '$numero'");
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
