<?php
header('Content-type: application/json');
   require '../conexion.php';

//Updating a record (updateAction)

		//Update record in database
		$result = mysqli_query($conexion,"UPDATE equivalencias SET id_tipo =
        " . $_POST["id_tipo"] . ",
        id_asignatura = '" . $_POST["id_asignatura"] . "',
        equivalencia1 = '" . $_POST["equivalencia1"] . "',
        equivalencia2 = '" . $_POST["equivalencia2"] . "',
        equivalencia3 = '" . $_POST["equivalencia3"] . "'
        WHERE id_equivalencia = " . $_POST["id_equivalencia"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>
