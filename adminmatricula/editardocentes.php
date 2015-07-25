<?php
header('Content-type: application/json');
   require '../conexion.php';

	//Update record in database


		$result = mysqli_query($conexion,"UPDATE docente SET nombre = '" . $_POST["nombre"] . "',apellido = '" . $_POST["apellido"] . "',genero = '" . $_POST["genero"] . "',telefono = '" . $_POST["telefono"] . "',correo = '" . $_POST["correo"] . "',id_carrera = '" . $_POST["id_carrera"] . "',cordinador = '" . $_POST["cordinador"] . "'  WHERE id_docente = " . $_POST["id_docente"] . ";");


			//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>
