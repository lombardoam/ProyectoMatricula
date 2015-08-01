<?php
   //Insert record into database
   $conexion = mysqli_connect('localhost','root','','matricula');
   $result = mysqli_query($conexion, "INSERT INTO
   usuarios(
   nombre,
   apellido,
   nombre_usuario,
   contrasena,
   tipo_usuario,
   RecordDate
   )
   VALUES('
   " . $_POST["nombre"] . "',
   " . $_POST["apellido"] . "',
   " . $_POST["nombre_usuario"] . "',
   " . $_POST["contrasena"] . "',
   " . $_POST["tipo_usuario"] .
   ",now());"
   );

   //Get last inserted record (to return to jTable)
   $result = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = LAST_INSERT_ID();");
   $row = mysqli_fetch_array($result);

   //Return result to jTable
   $jTableResult = array();
   $jTableResult['Result'] = "OK";
   $jTableResult['Record'] = $row;
   print json_encode($jTableResult);

?>
