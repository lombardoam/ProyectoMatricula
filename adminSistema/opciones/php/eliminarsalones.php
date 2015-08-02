<?php


//Delete from database
$result = mysqli_query($conexion, "DELETE FROM salones WHERE id_salon = " . $_POST["id_salon"] . ";");

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
print json_encode($jTableResult);

?>
