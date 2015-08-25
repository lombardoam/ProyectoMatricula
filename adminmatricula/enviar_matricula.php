<?php
require 'matricula.php';
require'header.php';
require 'conexion.php';
require 'noautorizado.php';

        $query = mysqli_query($conexion, "INSERT INTO matriculas (num_cuenta, id_programacion)
       VALUES('{$id_estu}', '{$id [$i]}')");

        if (!mysqli_query($conexion, "INSERT INTO matriculas (num_cuenta, id_programacion)
       VALUES('" . $_POST['numerocuenta']. "', '{$id [$i]}')"))
{
        echo mysqli_errno($conexion) . ": " . mysqli_error($conexion) . "<br />";
}








?>
