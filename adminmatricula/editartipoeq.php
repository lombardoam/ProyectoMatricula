<?php
header('Content-type: application/json');
   require 'conexion.php';

//Updating a record (updateAction)

		//Update record in database
		$result = mysqli_query($conexion,"UPDATE tipo_equivalencias SET codigo_tipo_eq =
        '" . $_POST["codigo_tipo_eq"] . "',
        descripcion = '" . $_POST["descripcion"] . "'
        WHERE id_tipo = " . $_POST["id_tipo"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>
