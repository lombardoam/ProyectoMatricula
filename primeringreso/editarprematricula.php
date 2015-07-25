<?php
header('Content-type: application/json');
   require '../conexion.php';

//Updating a record (updateAction)

		//Update record in database
		$result = mysqli_query($conexion,"UPDATE prematricula SET id_estudiante =
        " . $_POST["id_estudiante"] . ",
        id_cl1 = '" . $_POST["id_cl1"] . "',
        s1 = '" . $_POST["s1"] . "',
        id_cl2 = '" . $_POST["id_cl2"] . "',
        s2 = '" . $_POST["s2"] . "',
        id_cl3 = '" . $_POST["id_cl3"] . "',
        s3 = '" . $_POST["s3"] . "',
        id_cl4 = '" . $_POST["id_cl4"] . "',
        s4 = '" . $_POST["s4"] . "',
        id_cl5 = '" . $_POST["id_cl5"] . "',
        s5 = '" . $_POST["s5"] . "',
        id_cl6 = '" . $_POST["id_cl6"] . "',
        s6 = '" . $_POST["s6"] . "',
        id_cl7 = '" . $_POST["id_cl7"] . "',
        s7 = '" . $_POST["s7"] . "'
        WHERE id_prematricula = " . $_POST["id_prematricula"] . ";");

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);

?>
