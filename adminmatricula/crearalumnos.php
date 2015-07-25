<?php
header('Content-type: application/json');
   require '../conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO estudiantes(
num_cuenta,
apellidos,
nombres,
correo,
lugar_nacimiento,
fecha_nacimiento,
telefono,
nacionalidad,
estado_civil,
direccion,
trabaja,
tel_trabajo,
dir_trabajo) VALUES(
" .  $_POST["num_cuenta"] . ",
'" . $_POST["apellidos"] . "',
'" . $_POST["nombres"] . "',
'" .  $_POST["correo"] . "',
'" .  $_POST["lugar_nacimiento"]   . "',
'" .   $_POST["fecha_nacimiento"]   . "',
'" .   $_POST["telefono"]   . "',
'" .   $_POST["nacionalidad"]  . "',
'" .  $_POST["estado_civil"] . "',
'" .  $_POST["direccion"] . "',
'" .  $_POST["trabaja"] . "',
'" .  $_POST["tel_trabajo"] . "',
'" .  $_POST["dir_trabajo"] . "'
)");


//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE id_estudiante = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
