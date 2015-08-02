<?php


//Update record in database
$result = mysqli_query($conexion, "UPDATE salones SET id_tipo_salon = " . $_POST["id_tipo_salon"] . ", id_edificio = " . $_POST["id_edificio"] . ",  numero_salon = " . $_POST["numero_salon"] . ",  capacidad = '" . $_POST["capacidad"] . "', recursos = '" . $_POST["recursos"] . "' WHERE id_salon = " . $_POST["id_salon"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
