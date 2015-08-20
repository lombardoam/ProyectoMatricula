<?php
header('Content-type: application/json');
require '../../require/conexion.php';

$sql1 = mysqli_num_rows(mysqli_query($conexion, "SELECT programacion_cursos.hora_inicio, programacion_cursos.id_empleado, programacion_cursos.id_aula, cursos.periodo FROM programacion_cursos INNER JOIN cursos ON programacion_cursos.id_curso = cursos.id_curso WHERE programacion_cursos.hora_inicio = '".$_POST["hora_inicio"]."' AND programacion_cursos.id_aula = ".$_POST["id_aula"]." AND programacion_cursos.dias = '" . $_POST["dias"] . "' ")); /*Que no se pueda poner en un mismo dia, en una misma aula y en un mismo horario un curso*/

$sql2 = mysqli_num_rows(mysqli_query($conexion, "SELECT programacion_cursos.hora_inicio, programacion_cursos.id_empleado, programacion_cursos.id_aula, cursos.periodo FROM programacion_cursos INNER JOIN cursos ON programacion_cursos.id_curso = cursos.id_curso WHERE programacion_cursos.hora_inicio = '".$_POST["hora_inicio"]."' AND programacion_cursos.id_empleado = " . $_POST["id_empleado"] . " AND programacion_cursos.dias = '" . $_POST["dias"] . "' ")); /*No asignar un profesor a otra clase en una hora que el ya tiene ocupado y los mismos dias*/

$sql3 = mysqli_query($conexion, "SELECT cursos.periodo FROM cursos INNER JOIN programacion.cursos ON cursos.id_curso = programacion_cursos.id_curso WHERE cursos.id_curso = " . $_POST["id_curso"] . " "); /*Solo sacando el periodo de cada curso que se programará*/

while($periodo = mysqli_fetch_assoc($sql3)){

}

$sql4 = mysqli_num_rows(mysqli_query($conexion, "SELECT programacion_cursos.hora_inicio, programacion_cursos.id_empleado, programacion_cursos.id_aula, cursos.periodo FROM programacion_cursos INNER JOIN cursos ON programacion_cursos.id_curso = cursos.id_curso WHERE programacion_cursos.hora_inicio = '".$_POST["hora_inicio"]."' AND cursos.periodo = ".$periodo["periodo"]." ")); /*Que no choquen clases del mismo periodo*/

if($sql1 > 0 OR $sql2 > 0){
    echo "Hay un error";
}else if($sql4 > 0){
    echo "Hay un erro";
}else{

//Insert record into database
$result = mysqli_query($conexion, "INSERT INTO programacion_cursos(codigo_prog_curso, id_periodo, id_curso, seccion, hora_inicio, hora_termina, dias, id_empleado, id_aula, estatus_curso) VALUES('" . $_POST["codigo_prog_curso"] . "', " . $_POST["id_periodo"] . ", " . $_POST["id_curso"] . ", '" . $_POST["seccion"] . "', '" . $_POST["hora_inicio"] . "', '" . $_POST["hora_termina"] . "', '" . $_POST["dias"] . "', " . $_POST["id_empleado"] . "," . $_POST["id_aula"] . ", '" . $_POST["estatus_curso"] . "');");

//Get last inserted record (to return to jTable)
$result = mysqli_query($conexion, "SELECT * FROM programacion_cursos WHERE id_programacion = LAST_INSERT_ID();");
$row = mysqli_fetch_array($result);

//Return result to jTable
$jTableResult = array();
$jTableResult['Result'] = "OK";
$jTableResult['Record'] = $row;
print json_encode($jTableResult);
}
?>
