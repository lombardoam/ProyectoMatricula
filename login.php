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
            switch ($result[5]){
               case 1: //Administrador
                  header('Location:adminSistema/index.php');
                  break;
               case 2; //Docente
                  header('Location:maestros/index.html');
                  break;
               case 3; //Alumno
                  header('Location:index.html?alumno');
                  break;
               case 4; //Encargado
                  header('Location:adminmatricula/index.php');
                  break;
               case 5; //Contador
                  header('Location:index.html?contador');
                  break;
            }
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
