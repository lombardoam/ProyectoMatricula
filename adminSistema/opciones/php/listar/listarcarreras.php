<?php
header('Content-type: application/json');
require '../../require/conexion.php';

if (empty($_POST['nombre']) && empty($_POST['facultad'])){
    $result = mysqli_query($conexion, "SELECT * FROM carreras");
}

    else
    {
        $nombre = $_POST['nombre'];
        $facultad = $_POST['facultad'];

        $result = mysqli_query($conexion, "SELECT * FROM carreras WHERE nombre_carrera LIKE '%$nombre%' AND id_facultad = '$facultad' "); /*Corregir esa parte, ya que no me deja buscar con */
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
