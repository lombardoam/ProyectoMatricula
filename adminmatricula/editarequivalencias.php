<?php
header('Content-type: application/json');
   require 'conexion.php';

//Updating a record (updateAction)

		//Update record in database
		$result = mysqli_query($conexion,"UPDATE equivalencias SET codigo_eq =
        '" . $_POST["codigo_eq"] . "',
        nombre_universidad = '" . $_POST["nombre_universidad"] . "',
        id_curso = '" . $_POST["id_curso"] . "',
        codigo_clase_equivalencia = '" . $_POST["codigo_clase_equivalencia"] . "',
        num_cuenta = '" . $_POST["num_cuenta"] . "',
        id_tipo = '" . $_POST["id_tipo"] . "',
        comentarios = '" . $_POST["comentarios"] . "'
        WHERE id_interna = " . $_POST["id_interna"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>
