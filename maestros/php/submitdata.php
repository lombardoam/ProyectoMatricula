<?php

   //Main code
   require 'conexion.php';
   if((isset($_GET['tipo_eval'])) && (isset($_GET['tipo'])) && (isset($_GET['progra']))){
      $tipo = $_GET['tipo'];
      $progra = $_GET['progra'];
      $sql = "SELECT * FROM configuraciones WHERE id_programacion = ".$progra;
      $result = mysqli_query($con, $sql);
      $rows = mysqli_fetch_assoc($result);
      if($rows['id_configuracion'] != null){
         if($rows['tipo_evaluacion'] == $tipo){
            $array = array(
               'cambio' => null,
               'mensaje' => '<h4>Ya se han guardado las configuraciones previamente.</h4>'
            );
            echo json_encode($array);
         }else{
            actualizar($tipo, $rows['id_configuracion'], $con);
         }
      }else{
         ingresar($tipo, $progra, $con);
      }

   }
   if((isset($_GET['insert'])) && (isset($_GET['id_config'])) && (isset($_GET['nombre'])) && (isset($_GET['descripcion'])) && (isset($_GET['puntos'])) && (isset($_GET['parcial']))){
      $config = $_GET['id_config'];
      $nombre = $_GET['nombre'];
      $descripcion = $_GET['descripcion'];
      $puntos = $_GET['puntos'];
      $parcial = $_GET['parcial'];
      $parcial += 1;
      ingresareval($config, $nombre, $descripcion, $puntos, $parcial, $con);
   }
   if((isset($_GET['update'])) && (isset($_GET['id_eval'])) && (isset($_GET['id_config'])) && (isset($_GET['nombre'])) && (isset($_GET['descripcion'])) && (isset($_GET['puntos'])) && (isset($_GET['parcial']))){
      $id_eval = $_GET['id_eval'];
      $config = $_GET['id_config'];
      $nombre = $_GET['nombre'];
      $descripcion = $_GET['descripcion'];
      $puntos = $_GET['puntos'];
      $parcial = $_GET['parcial'];
      editareval($id_eval, $config, $nombre, $descripcion, $puntos, $parcial, $con);
   }
   if((isset($_GET['eliminar'])) && (isset($_GET['id_eval']))){
      $id_eval = $_GET['id_eval'];
      eliminareval($id_eval, $con);
   }
   if((isset($_GET['notas'])) && (isset($_GET['object']))){
      $object = json_decode($_GET['object']);
      $cantestudiantes = sizeof($object);
      $resultado = true;
      for($i = 0; $i < $cantestudiantes; $i++){
         $id_estudiante = $object[$i]->id_estudiante;
         $cantevals = sizeof($object[$i]->evaluaciones);
         for($j = 0; $j < $cantevals; $j++){
            $id_eval = $object[$i]->evaluaciones[$j]->id_evaluacion;
            $valor = $object[$i]->evaluaciones[$j]->valor;
            ingresarnota($resultado, $id_estudiante, $id_eval, $valor, $con);
         }
      }
      if($resultado){
         $array = array(
            'cambio' => 'si',
            'mensaje' => '<h4>Se han ingresado las notas</h4>'
         );
         echo json_encode($array);
      }else{
         $array = array(
            'cambio' => null,
            'mensaje' => '<h4>Ha ocurrido un error al ingresar</h4>'
         );
         echo json_encode($array);
      }
   }
   //end

   //funciones
   function ingresar($tipo_eval, $id_progra, $conexion){
      $sql = "INSERT INTO configuraciones(tipo_evaluacion, id_programacion) VALUES($tipo_eval, $id_progra)";
      $result = mysqli_query($conexion, $sql);
      if($result){
         $last = mysqli_query($conexion, "SELECT id_configuracion FROM configuraciones WHERE id_configuracion = ".$id_progra);
		   $last_id = mysqli_fetch_assoc($last);
         $array = array(
            'cambio' => 'si',
            'mensaje' => '<h4>Ha guardado la configuración correctamente.</h4>',
            'id_config' => $last_id['id_configuracion']
         );
         echo json_encode($array);
      }else{
         $array = array(
            'cambio' => null,
            'mensaje' => '<h4>No se pudo guardar la configuración.</h4>'
         );
         echo json_encode($array);
      }
   }
   function actualizar($tipo_eval, $id_config, $conexion){
      $sql = "UPDATE configuraciones SET tipo_evaluacion = ".$tipo_eval." WHERE id_configuracion = ".$id_config;
      $result = mysqli_query($conexion, $sql);
      if($result){
         $array = array(
            'cambio' => 'si',
            'mensaje' => '<h4>Ha actualizado la configuración correctamente.</h4>',
            'id_config' => $id_config
         );
         echo json_encode($array);
      }else{
         $array = array(
            'cambio' => null,
            'mensaje' => '<h4>No se pudo actualizar la configuración.</h4>'
         );
         echo json_encode($array);
      }
   }
   function ingresareval($id_config, $name, $desc, $pts, $parc, $conexion){
      $sql = "INSERT INTO evaluaciones(
      id_configuracion,
      nombre,
      descripcion,
      valor,
      id_parcial)
      VALUES (
      ".$id_config.",
      '".$name."',
      '".$desc."',
      ".$pts.",
      ".$parc."
      )";
      $query = mysqli_query($conexion, $sql);
      if($query){
         $last = mysqli_insert_id($conexion);
         $array = array(
            'cambio' => 'si',
            'mensaje' => '<h4>Se ha guardado la evaluación.</h4>',
            'last_id' => $last
         );
         echo json_encode($array);
      }else{
         echo "<h4>No se pudo guardar la evaluacion, intenta más tarde.</h4>";
      }
   }
   function editareval($id_eval, $id_config, $name, $desc, $pts, $parc, $conexion){
      $sql = "UPDATE evaluaciones SET
      id_configuracion = $id_config,
      nombre = '$name',
      descripcion = '$desc',
      valor = $pts,
      id_parcial = $parc
      WHERE
      id_evaluacion = $id_eval
      ";
      $query = mysqli_query($conexion, $sql);
      if($query){
         $array = array(
            'cambio' => 'si',
            'mensaje' => '<h4>Se ha actualizado la evaluación.</h4>'
         );
         echo json_encode($array);
      }else{
         $array = array(
            'cambio' => 'si',
            'mensaje' => '<h4>No se ha podido completar la actualizacion, intente más tarde.</h4>'
         );
         echo json_encode($array);
      }
   }
   function eliminareval($ideval, $conexion){
      $sql = "DELETE FROM evaluaciones WHERE id_evaluacion = " . $ideval;
      $query = mysqli_query($conexion, $sql);
      if($query){
         $array = array(
            'cambio' => 'si',
            'mensaje' => '<h4>Se ha eliminado la evaluacion.</h4>'
         );
         echo json_encode($array);
      }else{
         $array = array(
            'cambio' => 'no',
            'mensaje' => '<h4>Ha ocurrido un error al eliminar</h4>'
         );
         echo json_encode($array);
      }
   }
   function ingresarnota($result, $id_estudiante, $id_evaluacion, $valor, $conexion){
      $sql = "INSERT INTO historiales_academicos(id_estudiante, id_evaluacion, valor) VALUES($id_estudiante, $id_evaluacion, $valor)";
      $query = mysqli_query($conexion, $sql);
      if(!$query){
         $result = false;
      }
      return $result;
   }
?>
