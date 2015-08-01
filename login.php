<?php

   if(isset($_POST['usuario']) && isset($_POST['contra'])){
      $usuario = $_POST['usuario'];
      $contrasena = $_POST['contra'];
      $query = "SELECT * FROM usuarios WHERE nombre_usuario = '" . $usuario . "' AND contrasena = '" . $contrasena . "';";

      try {
         $conexion = mysqli_connect('localhost','root','','matricula');
         $exec = mysqli_query($conexion, $query);
         if($result = mysqli_fetch_row($exec)){
            echo "bien";
            session_start();
            $_SESSION['nombre'] = $result[1];
            $_SESSION['apellido'] = $result[2];
            $_SESSION['usuario'] = $result[3];
         }else{
            echo "mal";
         }
      } catch(mysqli_exception $e){
         echo $e;
      }
   }else{
      header('Location:index.html');
   }

?>
