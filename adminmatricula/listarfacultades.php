<?php
  header('Content-type: application/json');
  $conexion = mysqli_connect('localhost','root','','matricula');

//Get record count
		$result = mysqli_query($conexion, "SELECT COUNT(*) AS RecordCount FROM facultades");
		$row = mysqli_fetch_array($result);
		$recordCount = $row['RecordCount'];
  //Get records from database
  $result = mysqli_query($conexion, "SELECT * FROM facultades");

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
