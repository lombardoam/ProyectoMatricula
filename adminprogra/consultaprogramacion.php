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
   } else if($_SESSION['tipo_usuario'] != 6){
      header('Location:../index.php?no_aut');
   }
?>
<?php
  header('Content-type: application/json');
  require 'conexion.php';

//Get record count
if (empty($_POST['nombre'])){
            }
		$result = mysqli_query($conexion, "SELECT COUNT(*) AS RecordCount FROM programacion_cursos WHERE id_plan_estudio='" . ($_SESSION['id_plan_estudio']) . "'");

		$row = mysqli_fetch_array($result);
		$recordCount = $row['RecordCount'];
  //Get records from database
if (empty($_POST['nombre'])){
  $result = mysqli_query($conexion, "SELECT * FROM programacion_cursos WHERE id_plan_estudio='" . ($_SESSION['id_plan_estudio']) . "'");
    }

    else
    {
        $nombre = $_POST['nombre'];


  $result = mysqli_query($conexion, "SELECT * FROM programacion_cursos WHERE id_curso LIKE '%$nombre%' AND id_plan_estudio='" . ($_SESSION['id_plan_estudio']) . "'");
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
