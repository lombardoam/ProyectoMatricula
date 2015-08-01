<?php
   //Get records from database
   $conexion = mysqli_connect('localhost','root','','matricula');
   $result = mysqli_query($conexion, "SELECT * FROM matricula.usuarios");

   //Add all records to an array
   $rows = array();
   while($row = mysqli_fetch_array($result))
   {
       $rows[] = $row;
   }

   //Return result to jTable
   $jTableResult = array();
   $jTableResult['Result'] = "OK";
   $jTableResult['Records'] = $rows;
   print json_encode($jTableResult);

?>
