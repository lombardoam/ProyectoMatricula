<?php
header('Content-type: application/json');
   require 'conexion.php';

	//Creating a new record (createAction)
		//Insert record into database
		$result = mysqli_query($conexion,"INSERT INTO cursos (codigo_curso, nombre_curso, uv, horas_practicas, horas_teoricas, laboratorio, id_plan_estudio,periodo) VALUES(
        '" . $_POST["codigo_curso"] . "',
        '". $_POST["nombre_curso"] . "',
        ". $_POST["uv"] . ",
        '". $_POST["horas_practicas"] . "',
        ". $_POST["horas_teoricas"] . ",
        ". $_POST["laboratorio"] . ",
        ". $_POST["id_plan_estudio"] . ",
        ". $_POST["periodo"] . "
        )");



		//Get last inserted record (to return to jTable)
		$result = mysqli_query($conexion,"SELECT * FROM cursos WHERE id_curso = LAST_INSERT_ID();");
		$row = mysqli_fetch_array($result);

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $row;
		print json_encode($jTableResult);

?>
