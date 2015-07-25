<?php
header('Content-type: application/json');
   require '../conexion.php';

//Delete from database
		$result = mysqli_query($conexion,"DELETE FROM asignaturas WHERE id_asignatura = " . $_POST["id_asignatura"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>



