<?php
header('Content-type: application/json');
   require '../conexion.php';

	//Creating a new record (createAction)
		//Insert record into database
		$result = mysqli_query($conexion,"INSERT INTO asignaturas (nombre_clase, codigo_clase, UV, periodo, horas_practicas, horas_teoricas) VALUES(
        '" . $_POST["nombre_clase"] . "',
        '". $_POST["codigo_clase"] . "',
        ". $_POST["UV"] . ",
        '". $_POST["periodo"] . "',
        ". $_POST["horas_practicas"] . ",
        ". $_POST["horas_teoricas"] . "
        )");



		//Get last inserted record (to return to jTable)
		$result = mysqli_query($conexion,"SELECT * FROM asignaturas WHERE id_asignatura = LAST_INSERT_ID();");
		$row = mysqli_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);

?>
