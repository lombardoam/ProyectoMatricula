<?php
   session_start();
   if(!(
      isset($_SESSION['nombre']) &&
      isset($_SESSION['apellido']) &&
      isset($_SESSION['usuario']) &&
      isset($_SESSION['tipo_usuario']) &&
      isset($_SESSION['num_cuenta']) &&
      isset($_SESSION['id_plan_estudio'])
      )
   ){
      header('Location:../index.php?no_aut');
   }
?>

<?php
  header('Content-type: application/json');
  require 'conexion.php';

if(empty($_POST['nombre']){
   //Get record count
		$result = mysqli_query($conexion, "SELECT COUNT(*) AS RecordCount FROM programacion_cursos");
		$row = mysqli_fetch_array($result);
		$recordCount = $row['RecordCount'];
}else{
    $nombre = $_POST['nombre'];
    //Get records from database
  $result = mysqli_query($conexion, "SELECT * FROM programacion_cursos WHERE id_curso = '$nombre'");

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
  $jTableResult['TotalRecordCount'] = $recordCount;
  $jTableResult['Records'] = $rows;
  print json_encode($jTableResult);
?>
