<?php

   if(isset($_POST['usuario']) && isset($_POST['contra'])){
      $usuario = $_POST['usuario'];
      $contrasena = $_POST['contra'];
      $query = "SELECT * FROM usuarios WHERE nombre_usuario = '" . $usuario . "' AND contrasena = '" . $contrasena . "';";

      try {
         $conexion = mysqli_connect('localhost','root','','matricula');
         $exec = mysqli_query($conexion, $query);
         if($result = mysqli_fetch_row($exec)){
            session_start();
            $_SESSION['nombre'] = $result[1];
            $_SESSION['apellido'] = $result[2];
            $_SESSION['usuario'] = $result[3];
            $_SESSION['tipo_usuario'] = $result[5];


            setcookie("nombre", $result[1]);
            setcookie("apellido", $result[2]);



            /* La variable $_SESSION['num_cuenta'] está relacionada con las tablas de empleados y estudiantes.
             * Es para poder acceder a toda la información del usuario que está actualmente logeado
             * en el sistema independientemente si es un estudiante o es algún empleado (administrador, encargado
             * de matricula, docente o contador).
             * Les va a servir para ingresar cualquier dato que esté relacionado con el usuario actual.
             */

            $_SESSION['num_cuenta'] = $result[6];

            switch ($result[5]){
               case 1: //Administrador
                  header('Location:adminSistema/index.php');
                  break;
               case 2; //Docente
                  header('Location:maestros/index.php');
                  break;
               case 3; //Alumno
                  $sql = "SELECT id_carrera FROM usuarios INNER JOIN estudiantes WHERE usuarios.num_cuenta = " . $_SESSION['num_cuenta'] . " AND estudiantes.num_cuenta = " . $_SESSION['num_cuenta'];
                  $res = mysqli_query($conexion, $sql);
                  $array = mysqli_fetch_assoc($res);
                  $_SESSION['id_carrera'] = $array['id_carrera'];
                  header('Location:estudiantes/index.php');
                  break;
               case 4; //Encargado
                  header('Location:adminmatricula/index.php');
                  break;
               case 5; //Contador
                  header('Location:contabilidad/index.php');
                  break;
               case 6; //Programación de cursos
                  header('Location:adminprogra/index.php');
                  break;
               case 7; //Primer Ingreso
                  header('Location:primeringreso/index.php');
                  break;
            }

         }else{
            header('Location:index.php?error');
         }
      }catch(mysqli_sql_exception $e){ echo $e; }
   }else{
      header('Location:index.html');
   }

?>
