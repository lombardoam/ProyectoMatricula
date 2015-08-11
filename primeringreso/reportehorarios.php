
<?php
    session_start();
   if(!(
      isset($_SESSION['nombre']) &&
      isset($_SESSION['apellido']) &&
      isset($_SESSION['usuario']) &&
      isset($_SESSION['tipo_usuario']) &&
      isset($_SESSION['num_cuenta']) &&
      isset($_SESSION['id_plan_estudio'])
      )
   ){
      header('Location:../index.php?no_aut');
   } else if($_SESSION['tipo_usuario'] != 7){
      header('Location:../index.php?no_aut');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Reportes - Horarios</title>
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="js/bootstrap.js"></script>
</head>
<body><br><br>
    <div align="center">
        <img src="images/UJCV.jpg" alt="UJCV Logo" width="10%" height="10%" /><h1>Programación académica - Horarios</h1>
  <div class="container">
      <center><a href="javascript:window.print(); void 0;"  class="btn btn-default"><i class="glyphicon glyphicon-print"></i></a><br></center></div><br>
        <div class="table-responsive">
   <table class="table table-bordered">
      <theader>
         <tr>
            <th>Codigo</th>
            <th>Periodo</th>
            <th>Asignatura</th>
            <th>Plan</th>
            <th>Seccion</th>
            <th>Hora inicial</th>
            <th>Hora final</th>
            <th>Días</th>
            <th>Docente</th>
            <th>Salón</th>
            <th>Estado</th>
         </tr>
      </theader>
      <tbody >
        <?php
            $conexion = mysqli_connect('localhost','root','','matricula');
            $sql = "SELECT programacion_cursos.id_programacion, programacion_cursos.codigo_prog_curso, periodos_academicos.codigo_periodo, cursos.nombre_curso, planes_estudio.nombre_plan, programacion_cursos.seccion, programacion_cursos.hora_inicio, programacion_cursos.hora_termina, programacion_cursos.dias, empleados.nombres, aulas.codigo_aula, programacion_cursos.estatus_curso FROM programacion_cursos INNER JOIN periodos_academicos INNER JOIN cursos INNER JOIN planes_estudio INNER JOIN empleados INNER JOIN aulas WHERE programacion_cursos.id_periodo = periodos_academicos.id_periodo AND programacion_cursos.id_curso = cursos.id_curso AND programacion_cursos.id_plan_estudio = planes_estudio.id_plan_estudio AND programacion_cursos.id_empleado = empleados.id_empleado AND programacion_cursos.id_aula = aulas.id_aula AND cursos.periodo='1' ORDER BY id_programacion;;";
            $query = mysqli_query($conexion, $sql);
            while($rows = mysqli_fetch_assoc($query)){
               echo "
                  <tr>
                     <td>$rows[codigo_prog_curso]</td>
                     <td>$rows[codigo_periodo]</td>
                     <td>$rows[nombre_curso]</td>
                     <td>$rows[nombre_plan]</td>
                     <td>$rows[seccion]</td>
                     <td>$rows[hora_inicio]</td>
                     <td>$rows[hora_termina]</td>
                     <td>$rows[dias]</td>
                     <td>$rows[nombres]</td>
                     <td>$rows[codigo_aula]</td>
                     <td>$rows[estatus_curso]</td>
                  </tr>
               ";
            }
         ?>

      </tbody>
            </table></div>
   </div>
</body>
</html>
