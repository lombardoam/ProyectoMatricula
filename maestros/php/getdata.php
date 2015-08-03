<?php
   require 'conexion.php';
   if(isset($_GET['eval'])){
      $result = mysqli_query($con, "SELECT * FROM evaluaciones");

   }
?>
