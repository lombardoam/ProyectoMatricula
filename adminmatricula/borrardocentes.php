<?php
header('Content-type: application/json');
   require '../conexion.php';

//Delete from database
		$result = mysqli_query($conexion,"DELETE FROM docente WHERE id_docente = " . $_POST["id_docente"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>
