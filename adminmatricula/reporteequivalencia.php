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
   <title>Reportes - Equivalencias</title>
   <link rel="stylesheet" href="css/bootstrap.css">
   <script src="js/bootstrap.js"></script>
</head>
<body><br><br>
    <div align="center">
        <img src="images/UJCV.jpg" alt="UJCV Logo" width="10%" height="10%" /><h1>Equivalencias</h1>
  <div class="container">
      <center><a href="javascript:window.print(); void 0;"  class="btn btn-default"><i class="glyphicon glyphicon-print"></i></a><br></center></div><br>
        <div class="table-responsive">
   <table class="table table-bordered">
      <theader>
         <tr>
            <th>Codigo</th>
            <th>Nombre Universidad</th>
            <th>Asignatura</th>
            <th>Clase equivalencia</th>
            <th>Cuenta</th>
            <th>Tipo equivalencia</th>
            <th>Comentarios</th>


         </tr>
      </theader>
      <tbody >
        <?php
            $conexion = mysqli_connect('localhost','root','','matricula');
            $sql = "SELECT equivalencias.id_interna, equivalencias.codigo_eq, equivalencias.nombre_universidad, cursos.nombre_curso, equivalencias.codigo_clase_equivalencia, equivalencias.num_cuenta, tipo_equivalencias.descripcion, equivalencias.comentarios FROM equivalencias INNER JOIN cursos INNER JOIN tipo_equivalencias WHERE equivalencias.id_curso = cursos.id_curso AND equivalencias.id_tipo = tipo_equivalencias.id_tipo ORDER BY id_interna;;";
            $query = mysqli_query($conexion, $sql);
            while($rows = mysqli_fetch_assoc($query)){
               echo "
                  <tr>
                     <td>$rows[codigo_eq]</td>
                     <td>$rows[nombre_universidad]</td>
                     <td>$rows[nombre_curso]</td>
                     <td>$rows[codigo_clase_equivalencia]</td>
                     <td>$rows[num_cuenta]</td>
                     <td>$rows[descripcion]</td>
                     <td>$rows[comentarios]</td>

                  </tr>
               ";
            }
         ?>

      </tbody>
            </table></div>
   </div>
</body>
</html>
