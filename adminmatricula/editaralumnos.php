<?php
header('Content-type: application/json');
   require '../conexion.php';

//Updating a record (updateAction)

		//Update record in database
		$result = mysqli_query($conexion,"UPDATE estudiantes SET num_cuenta =
        " . $_POST["num_cuenta"] . ",
        apellidos = '" . $_POST["apellidos"] . "',
        nombres = '" . $_POST["nombres"] . "',
        correo = '" . $_POST["correo"] . "',
        lugar_nacimiento = '" . $_POST["lugar_nacimiento"] . "',
        fecha_nacimiento = '" . $_POST["fecha_nacimiento"] . "',
        telefono = '" . $_POST["telefono"] . "',
        nacionalidad = '" . $_POST["nacionalidad"] . "',
        estado_civil = '" . $_POST["estado_civil"] . "',
        direccion = '" . $_POST["direccion"] . "',
        trabaja = '" . $_POST["trabaja"] . "',
        tel_trabajo = '" . $_POST["tel_trabajo"] . "',
        dir_trabajo = '" . $_POST["dir_trabajo"] . "'
        WHERE id_estudiante = " . $_POST["id_estudiante"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>
