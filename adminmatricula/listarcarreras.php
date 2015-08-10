<?php
    session_start();
   if(!(
      isset($_SESSION['nombre']) &&
      isset($_SESSION['apellido']) &&
      isset($_SESSION['usuario']) &&
      isset($_SESSION['tipo_usuario']) &&
      isset($_SESSION['num_cuenta']) //hola
      )
   ){
      header('Location:../index.php?no_aut');
   } else if($_SESSION['tipo_usuario'] != 4){
      header('Location:../index.php?no_aut');
   }
?>

<?php
  header('Content-type: application/json');
  $conexion = mysqli_connect('localhost','root','','matricula');

//Get record count
		$result = mysqli_query($conexion, "SELECT COUNT(*) AS RecordCount FROM carreras");
		$row = mysqli_fetch_array($result);
		$recordCount = $row['RecordCount'];
  //Get records from database
  $result = mysqli_query($conexion, "SELECT * FROM carreras");

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
