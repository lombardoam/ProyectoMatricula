<?php
   require 'conexion.php';
   if(isset($_GET['parciales'])){
      $sql = "SELECT * FROM parciales";
      $result = mysqli_query($con, $sql);
      $i = 0;
      while($row = mysqli_fetch_assoc($result)){
         $parciales[$i] = $row;
         echo "
            <section>
                  <h3>".$row['nombre']." <a href=\"javascript:\" class=\"btn btn-info\" onclick=\"agregar(".$i.")\">Agregar</a></h3>
                  <table class=\"table table-hover\">
                     <thead>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Puntos</th>
                        <th>Acciones</th>
                     </thead>
                     <tbody id=\"$i\">";

         echo "<input type=\"hidden\" value=\"0\" id=\"h$i\">
                     </tbody>
                  </table>
                  <div class=\"alert alert-info\">
                     <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                     <i class=\"fa fa-info-circle\"></i> <strong> Nota!</strong> Asegurese de que la sumatoria de la columna puntos sea igual al total de los puntos oro o base a 100 del parcial.
                  </div>
               </section>
         ";
         $i++;
      }
   }
   if((isset($_GET['clases'])) && (isset($_GET['cuenta']))){
      $cuenta = $_GET['cuenta'];
      $sql = "SELECT cursos.nombre_curso, programacion_cursos.id_programacion, programacion_cursos.seccion FROM usuarios INNER JOIN empleados INNER JOIN programacion_cursos INNER JOIN cursos WHERE usuarios.num_cuenta = empleados.num_cuenta AND programacion_cursos.id_empleado = empleados.id_empleado AND programacion_cursos.id_curso = cursos.id_curso AND empleados.num_cuenta = ". $cuenta;
      $result = mysqli_query($con, $sql);
      echo "<option value=\"0\">Seleccione una clase..</option>";
      while($rows = mysqli_fetch_assoc($result)){
         echo "
            <option value=\"$rows[id_programacion]\">$rows[nombre_curso]</option>
         ";
      }
   }
   if((isset($_GET['seccion'])) && (isset($_GET['cuenta']))){
      $cuenta = $_GET['cuenta'];
      $sql = "SELECT programacion_cursos.seccion FROM usuarios INNER JOIN empleados INNER JOIN programacion_cursos INNER JOIN cursos WHERE usuarios.num_cuenta = empleados.num_cuenta AND programacion_cursos.id_empleado = empleados.id_empleado AND programacion_cursos.id_curso = cursos.id_curso AND empleados.num_cuenta = ". $cuenta;
      $result = mysqli_query($con, $sql);
      while($rows = mysqli_fetch_assoc($result)){
         echo $rows['seccion'];
      }
   }
   if(isset($_GET['eval'])){
      $result = mysqli_query($con, "SELECT nombre, tipo_evaluacion FROM tipos_evaluacioens");
      echo "<option value=\"0\">Seleccione un tipo de evaluacion..</option>";
      while($row = mysqli_fetch_assoc($result)){
         echo "
            <option value=\"$row[tipo_evaluacion]\">$row[nombre]</option>
         ";
      }
   }
   if(isset($_GET['hidden'])){
      $result = mysqli_query($con, "SELECT count(*) AS parciales FROM parciales");
      $row = mysqli_fetch_row($result);
      echo "
         <input type=\"hidden\" value=\"$row[0]\" id=\"num_parciales\">
      ";
   }
   if(isset($_GET['id_prog'])){
      $id_prog = $_GET['id_prog'];
      if($id_prog != 0){
         $result = mysqli_query($con, "
         SELECT
         id_configuracion, tipo_evaluacion FROM
         configuraciones WHERE
         id_programacion =
         ".$id_prog);
         $row = mysqli_fetch_assoc($result);
         if($row['id_configuracion'] != null){
            $array = array(
               'id_config' => $row['id_configuracion'],
               'tipo_eval' => $row['tipo_evaluacion']
            );
            echo json_encode($array);
         }else{
            $array = array(
               'mensaje' => '<h4>No ha configurado esta clase.</h4>',
            );
            echo json_encode($array);
         }
      }else{
         $array = array(
            'id_config' => "",
            'tipo_eval' => 0
         );
         echo json_encode($array);
      }
   }
?>
