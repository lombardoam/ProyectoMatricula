<?php
  header('Content-type: application/json');
  require 'conexion.php';

//Get record count
		$result = mysqli_query($conexion, "SELECT COUNT(*) AS RecordCount FROM empleados WHERE id_puesto ='1'||id_puesto='2'");
		$row = mysqli_fetch_array($result);
		$recordCount = $row['RecordCount'];

  //Get records from database
  $result = mysqli_query($conexion, "SELECT * FROM empleados WHERE id_puesto ='1'||id_puesto='2'");

  //Add all records to an array
  $rows = array();
  while($row = mysqli_fetch_assoc($result))
  {
  $rows[] = $row;
  }

  //Return result to jTable
  $jTableResult = array();
  $jTableResult['Result'] = "OK";
  $jTableResult['TotalRecordCount'] = $recordCount;
  $jTableResult['Records'] = $rows;
  print json_encode($jTableResult);
?>
