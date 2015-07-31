<?php
   $usuario = $_POST['usuario'];
   $contrasena = $_POST['contra'];

    $conexion = mysqli_connect('localhost','root','','matricula');
    $query = "SELECT * FROM usuarios WHERE usuario=".$usuario. "and contrasena =".$contrasena;

?>
