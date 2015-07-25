<?php
header('Content-type: application/json');
   require '../conexion.php';

//Insert record into database
		$result = mysqli_query($conexion,"INSERT INTO docente ( nombre, apellido, genero, telefono, correo, id_carrera, cordinador) VALUES(
        '" . $_POST["nombre"] . "',
        '" . $_POST["apellido"] . "',
        '" . $_POST["genero"] . "',
        '" . $_POST["telefono"] . "',
        '" . $_POST["correo"] . "',
        '" . $_POST["id_carrera"] . "',
        '" . $_POST["cordinador"] . "')");



		//Get last inserted record (to return to jTable)
		$result = mysqli_query($conexion,"SELECT * FROM docente WHERE id_docente = LAST_INSERT_ID();");
		$row = mysqli_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);

?>
