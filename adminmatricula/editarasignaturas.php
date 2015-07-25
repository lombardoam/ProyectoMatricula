<?php
header('Content-type: application/json');
   require '../conexion.php';

//Updating a record (updateAction)

		//Update record in database
		$result = mysqli_query($conexion,"UPDATE asignaturas SET id_asignatura =
        " . $_POST["id_asignatura"] . ",
        nombre_clase = '" . $_POST["nombre_clase"] . "',
        codigo_clase = '" . $_POST["codigo_clase"] . "',
        UV = " . $_POST["UV"] . ",
        periodo = '" . $_POST["periodo"] . "',
        horas_practicas = " . $_POST["horas_practicas"] . ",
        horas_teoricas = " . $_POST["horas_teoricas"] . "
        WHERE id_asignatura = " . $_POST["id_asignatura"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>



