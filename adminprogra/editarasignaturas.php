<?php
//Updating a record (updateAction)
		//Update record in database
		$result = mysql_query("UPDATE cursos SET id_asignatura = '" . $_POST["id_asignatura"] . "',hora_inicial = '" . $_POST["hora_inicial"] . "',hora_final = '" . $_POST["hora_final"] . "',id_docente = '" . $_POST["id_docente"] . "',id_salon = '" . $_POST["id_salon"] . "', seccion = '" . $_POST["seccion"] . "' WHERE id_curso = " . $_POST["id_curso"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>
