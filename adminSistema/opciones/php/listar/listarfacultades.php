<?php

  header('Content-type: application/json');
 require '../../require/conexion.php';


    $result = mysqli_query($conexion, "SELECT * FROM facultades");
/*}else{
    $nombre = $_POST['nombre'];*/






  //Add all records to an array
  $rows = array();
  while($row = mysqli_fetch_assoc($result))
  {
  $rows[] = $row;
  }

  //Return result to jTable
  $jTableResult = array();
  $jTableResult['Result'] = "OK";
  /*$jTableResult['TotalRecordCount'] = $recordCount;*/
  $jTableResult['Records'] = $rows;
  print json_encode($jTableResult);
?>
