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
    $conexion = mysqli_connect('localhost','root','','matricula');
    //Get records from database
    $result = mysqli_query($conexion, "SELECT nombre_plan AS DisplayText, id_plan_estudio AS Value FROM planes_estudio WHERE id_plan_estudio='" . ($_SESSION['id_plan_estudio']) . "'");

    //Add all records to an array
    $rows = array();
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    //Return result to jTable
    $jTableResult = array();
    $jTableResult['Result'] = "OK";
    $jTableResult['Options'] = $rows;
    echo json_encode($jTableResult);
?>
