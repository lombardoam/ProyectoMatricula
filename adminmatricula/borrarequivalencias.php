<?php
header('Content-type: application/json');
   require 'conexion.php';

//Delete from database
		$result = mysqli_query($conexion,"DELETE FROM equivalencias WHERE id_interna = " . $_POST["id_interna"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>
