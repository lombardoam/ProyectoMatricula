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
   <title>Reportes - Docentes</title>
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="js/bootstrap.js"></script>
</head>
<body><br><br>
    <div align="center">
        <img src="images/UJCV.jpg" alt="UJCV Logo" width="10%" height="10%" /><h1>Docentes</h1>
  <div class="container">
      <center><a href="javascript:window.print(); void 0;"  class="btn btn-default"><i class="glyphicon glyphicon-print"></i></a><br></center></div><br>
        <div class="table-responsive">
   <table class="table table-bordered">
      <theader>
         <tr>
            <th>Codigo</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Género</th>
            <th>Teléfono</th>
            <th>E-mail</th>
            <th>Código Carrera</th>
            <th>Puesto</th>

         </tr>
      </theader>
      <tbody >
        <?php
            $conexion = mysqli_connect('localhost','root','','matricula');
            $sql = "SELECT empleados.id_empleado, empleados.codigo_empleado, empleados.nombres, empleados.apellidos, empleados.genero, empleados.telefono, empleados.email, carreras.nombre_carrera, puestos.descripcion FROM empleados INNER JOIN carreras INNER JOIN puestos WHERE empleados.codigo_carrera = carreras.codigo_carrera AND empleados.id_puesto = puestos.id_puesto AND (puestos.descripcion='Coordinador de carrera' OR puestos.descripcion='docente') ORDER BY id_empleado;;";
            $query = mysqli_query($conexion, $sql);
            while($rows = mysqli_fetch_assoc($query)){
               echo "
                  <tr>
                     <td>$rows[codigo_empleado]</td>
                     <td>$rows[nombres]</td>
                     <td>$rows[apellidos]</td>
                     <td>$rows[genero]</td>
                     <td>$rows[telefono]</td>
                     <td>$rows[email]</td>
                     <td>$rows[nombre_carrera]</td>
                     <td>$rows[descripcion]</td>

                  </tr>
               ";
            }
         ?>

      </tbody>
            </table></div>
   </div>
</body>
</html>
