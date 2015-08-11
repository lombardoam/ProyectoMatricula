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
   } else if($_SESSION['tipo_usuario'] != 6){
      header('Location:../index.php?no_aut');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Reportes - Cursos</title>
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="js/bootstrap.js"></script>
</head>
<body><br><br>
    <div align="center">
        <img src="images/UJCV.jpg" alt="UJCV Logo" width="10%" height="10%" /><h1>Cursos - Asignaturas disponibles</h1>
  <div class="container">
      <center><a href="javascript:window.print(); void 0;"  class="btn btn-default"><i class="glyphicon glyphicon-print"></i></a><br></center></div><br>
        <div class="table-responsive">
   <table class="table table-bordered">
      <theader>
         <tr>
            <th>Codigo</th>
            <th>Nombre Clase</th>
            <th>UV</th>
            <th>Horas teóricas</th>
            <th>Horas prácticas</th>
            <th>Laboratorio</th>
            <th>Plan</th>
            <th>Periodo</th>

         </tr>
      </theader>
      <tbody >
        <?php
            $conexion = mysqli_connect('localhost','root','','matricula');
            $sql = "SELECT cursos.id_curso, cursos.codigo_curso, cursos.nombre_curso, cursos.uv, cursos.horas_practicas, cursos.horas_teoricas, cursos.laboratorio, planes_estudio.nombre_plan, cursos.periodo FROM cursos INNER JOIN planes_estudio WHERE cursos.id_plan_estudio = planes_estudio.id_plan_estudio AND planes_estudio.id_plan_estudio='" . ($_SESSION['id_plan_estudio']) . "' ORDER BY id_curso;;";
            $query = mysqli_query($conexion, $sql);
            while($rows = mysqli_fetch_assoc($query)){
               echo "
                  <tr>
                     <td>$rows[codigo_curso]</td>
                     <td>$rows[nombre_curso]</td>
                     <td>$rows[uv]</td>
                     <td>$rows[horas_practicas]</td>
                     <td>$rows[horas_teoricas]</td>
                     <td>$rows[laboratorio]</td>
                     <td>$rows[nombre_plan]</td>
                     <td>$rows[periodo]</td>

                  </tr>
               ";
            }
         ?>

      </tbody>
            </table></div>
   </div>
</body>
</html>
