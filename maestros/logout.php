<?php
   session_start();
   unset($_SESSION['nombre']);
   unset($_SESSION['apellido']);
   unset($_SESSION['usuario']);
   unset($_SESSION['tipo_usuario']);
   unset($_SESSION['num_cuenta']);
   session_destroy();
   header('Location:../index.php?logout');
?>
