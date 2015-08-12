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
   } else if($_SESSION['tipo_usuario'] != 4){
      header('Location:../index.php?no_aut');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Reportes - Alumnos</title>
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="js/bootstrap.js"></script>
</head>
<body><br><br>
    <div align="center">
        <img src="images/UJCV.jpg" alt="UJCV Logo" width="10%" height="10%" /><h1>Alumnos matriculados en la UJCV</h1>
  <div class="container">
      <center><a href="javascript:window.print(); void 0;"  class="btn btn-default"><i class="glyphicon glyphicon-print"></i></a><br></center></div><br>
        <div class="table-responsive">
   <table class="table table-bordered">
      <theader>
         <tr>
            <th>Cuenta</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Tipo</th>
            <th>Lugar</th>
            <th>Nacimiento</th>
            <th>Estado Civil</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Dir.Trabajo</th>
            <th>Tel.Trabajo</th>
            <th>Ingreso</th>
            <th>Carrera</th>

         </tr>
      </theader>
      <tbody >
        <?php
            $conexion = mysqli_connect('localhost','root','','matricula');
            $sql = "SELECT estudiantes.id_estudiante, estudiantes.num_cuenta, estudiantes.nombres, estudiantes.apellidos, estudiantes.tipo_estudiante, estudiantes.lugar_nacimiento, estudiantes.fecha_nacimiento, estudiantes.estado_civil, estudiantes.direccion_vivienda, estudiantes.telefono, estudiantes.direccion_trabajo, estudiantes.telefono_trabajo, estudiantes.fecha_ingreso, carreras.nombre_carrera FROM estudiantes INNER JOIN carreras WHERE estudiantes.id_carrera = carreras.id_carrera ORDER BY id_estudiante;;";
            $query = mysqli_query($conexion, $sql);
            while($rows = mysqli_fetch_assoc($query)){
               echo "
                  <tr>
                     <td>$rows[num_cuenta]</td>
                     <td>$rows[nombres]</td>
                     <td>$rows[apellidos]</td>
                     <td>$rows[tipo_estudiante]</td>
                     <td>$rows[lugar_nacimiento]</td>
                     <td>$rows[fecha_nacimiento]</td>
                     <td>$rows[estado_civil]</td>
                     <td>$rows[direccion_vivienda]</td>
                     <td>$rows[telefono]</td>
                     <td>$rows[direccion_trabajo]</td>
                     <td>$rows[telefono_trabajo]</td>
                     <td>$rows[fecha_ingreso]</td>
                     <td>$rows[nombre_carrera]</td>

                  </tr>
               ";
            }
         ?>

      </tbody>
            </table></div>
   </div>
</body>
</html>

