<?php


//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO cursos(id_asignatura, periodo, hora_inicial, hora_final, dias, id_docente, id_salon, id_edificio, seccion) VALUES(" . $_POST["id_asignatura"] . ", '" . $_POST["periodo"] . "', '" . $_POST["hora_inicial"] . "', '" . $_POST["hora_final"] . "', '" . $_POST["dias"] . "', " . $_POST["id_docente"] . "," . $_POST["id_salon"] . "," . $_POST["id_edificio"] . ",'" . $_POST["seccion"] . "');");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM cursos WHERE id_curso = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);

?>
