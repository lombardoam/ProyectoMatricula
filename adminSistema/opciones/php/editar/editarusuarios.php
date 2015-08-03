<?php
header('Content-type: application/json');
require '../../require/conexion.php';

//Update record in database
$result = mysqli_query($conexion, "UPDATE usuarios SET nombre = '" . $_POST["nombre"] . "', apellido = '" . $_POST["apellido"] . "',  nombre_usuario = '" . $_POST["nombre_usuario"] . "',  contrasena = '" . $_POST["contrasena"] . "', tipo_usuario = " . $_POST["tipo_usuario"] . ", num_cuenta = " . $_POST["num_cuenta"] . " WHERE id_usuario = " . $_POST["id_usuario"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
