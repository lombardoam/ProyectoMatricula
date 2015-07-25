<?php
header('Content-type: application/json');
   require '../conexion.php';

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO prematricula(
id_estudiante,
id_cl1,
s1,
id_cl2,
s2,
id_cl3,
s3,
id_cl4,
s4,
id_cl5,
s5,
id_cl6,
s6,
id_cl7,
s7) VALUES(
" .  $_POST["id_estudiante"] . ",
'" . $_POST["id_cl1"] . "',
'" . $_POST["s1"] . "',
'" .  $_POST["id_cl2"] . "',
'" .  $_POST["s2"]   . "',
'" .   $_POST["id_cl3"]   . "',
'" .   $_POST["s3"]   . "',
'" .   $_POST["id_cl4"]  . "',
'" .  $_POST["s4"] . "',
'" .  $_POST["id_cl5"] . "',
'" .  $_POST["s5"] . "',
'" .  $_POST["id_cl6"] . "',
'" .  $_POST["s6"] . "',
'" .  $_POST["id_cl7"] . "',
'" .  $_POST["s7"] . "'
)");


//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM prematricula WHERE id_prematricula = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
